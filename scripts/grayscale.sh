#!/bin/sh

# create gradient
convert \( -size 1x1 xc:'#111' xc:'#fff' +append \) -filter cubic -resize 256x1! gradient.png

mkdir -p png

for f in $@; do
	target=png/$(echo $f | sed 's/\.svg/.png/')
	convert -resize 200x -colorspace gray "$f" gradient.png -clut "$target";
	echo "$f";
done

rm gradient.png
