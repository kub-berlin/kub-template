css/kub-rtl.css: css/kub-ltr.css
	cp $< $@
	sed -i 's/left/RIGHT/g;s/right/left/g;s/RIGHT/right/g' $@

css/kub-ltr.css: css/kub.scss css/_*.scss css/components/_*.scss node_modules
	sassc --style compressed $< > $@

node_modules:
	npm install sass-planifolia
	npm install mfbs

clean:
	rm -f css/kub-rtl.css
	rm -f css/kub-ltr.css
