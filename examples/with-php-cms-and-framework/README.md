## Getting started

**Wordpress**

```
$ git clone git@github.com:acme101/damp-starter.git
$ cd damp-starter
$ git clone git@github.com:WordPress/WordPress.git ./tmp
$ cp -a ./tmp/* ./src && rm -rf ./tmp
$ docker-compose up -d
```

Then open http://localhost

For other CMSs and Frameworks, just replace the git repo url above, then you are good to go!