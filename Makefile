.PHONY: build deploy

build:
	gulp styles

deploy:
	rsync -vrc * mli-field@fielddaylab.wisc.edu:/httpdocs --exclude-from rsync-exclude

deploy-wwwtest:
	rsync -vrc * test-field@wwwtest.fielddaylab.wisc.edu:/httpdocs --exclude-from rsync-exclude
