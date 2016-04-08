css/kub.css: css/kub.scss css/_*.scss css/components/_*.scss
	node-sass --source-map css/kub.css.map -o css $<
