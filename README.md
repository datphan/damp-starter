# Fast Install

With `docker` pre-installed:

```
$ git fetch <repo-url>
$ docker-compose up -d
```

Then go to `localhost` and enjoy!

*Note*: for those who use `nginx` insted of `apache`, check out [demp-starter](https://github.com/acme101/demp-starter).

## Higher Usage for better team collaboration and consistent dev environment

This works on both window, mac, linux:

```
$ cd ~/
$ git clone https://github.com/teracyhq/dev.git acme-dev
$ cd acme-dev/workspace/
$ git clone git@github.com:acme101/dev-setup.git
$ cp dev-setup/vagrant_config_override.example.json ../vagrant_config_override.json
```

Go to `acme-dev/vagrant_config_override.json` and make it like this:

```
"plugins": [{
  "_id": "2",
  "options": {
    "aliases": [
      "damp.acme.dev", "damp.acme.review"
    ]
  }
}]
```

Then:

```
$ vagrant up
```

**On new terminal window**

```
$ vagrant hostmanager
$ vagrant ssh
$ docker rm nginx-proxy -f
$ cd workspace/damp-starter
$ docker-compose up -d
```

Open damp.acme.dev (http + https modes) to check it out.

Further details can be found here: https://github.com/acme101/dev-setup/blob/master/README.md


## Review Mode

To review a different built Docker image.

For example, to review the `registry.gitlab.com/foouser/damp-starter:features-1` Docker image from @foouser.


```
$ vagrant ssh
$ cd workspace/damp-starter
$ export DOCKER_IMAGE_REVIEW=registry.gitlab.com/foouser/damp-starter:features-1
$ docker-compose -f docker-compose.yml -f docker-compose.review.yml up -d review
```

Open damp.acme.review (http + https modes) to check it out.

## Tips

To view logs on current processing container:

```
$ docker-compose logs -f
```

If there are errors, try restart container:

```
$ docker-compose restart && docker-compose up -d
```

Or remove and re-create a new:
```
$ docker-compose stop && docker-compose rm -f && docker-compose up -d
```
