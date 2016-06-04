css/kub-rtl.css: css/kub-ltr.css
	cp $< $@
	sed -i 's/left/RIGHT/g;s/right/left/g;s/RIGHT/right/g' $@

css/kub-ltr.css: css/kub.scss css/_*.scss css/components/_*.scss
	node-sass --output-style compressed --source-map css/kub-ltr.css.map -o css $<
	mv css/kub.css $@
