.PHONY: build deploy

build:
	gulp styles

deploy-wcer:
	rsync -vrc * dgagnon@website.education.wisc.edu:/var/www/site/fielddaylab --exclude-from rsync-exclude

deploy:
	rsync -vrc * mli-field@fielddaylab.wisc.edu:/httpdocs --exclude-from rsync-exclude
