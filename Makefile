css/kub-rtl.css: css/kub-ltr.css
	cp $< $@
	sed -i 's/left/RIGHT/g' $@
	sed -i 's/right/left/g' $@
	sed -i 's/RIGHT/right/g' $@

css/kub-ltr.css: css/kub.scss css/_*.scss css/components/_*.scss
	node-sass --source-map css/kub-ltr.css.map -o css $<
	mv css/kub.css $@
