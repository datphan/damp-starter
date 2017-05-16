# Getting Started

With `docker` pre-installed:

```
$ git fetch <repo-url> damp-starter
$ cd damp-starter
$ docker-compose up -d
```

Then go to `http://localhost` and enjoy!

To access `phpmyadmin` go to `http://localhost:8080` with user `root` and password `root`.

To config `mysql` username and password, edit `.env` file.

*Note*: default `hostname` is not `localhost`, in this example it is `'mysqldb'` or `getenv('MYSQL_HOST')`, check `./src/index.php` for more infomation.

*Note*: for those who use `nginx` insted of `apache`, check out [demp-starter](https://github.com/acme101/demp-starter).


- CI/CD with gitlab-ci: https://gitlab.com/acme101/damp-starter/pipelines
- CI/CD with travis-ci: https://travis-ci.org/acme101/damp-starter/builds

- Auto deployment to Heroku: https://damp-staging.herokuapp.com/
- Auto deployment to GKE with terapp.com domain A record: https://damp-staging.terapp.com/

## Higher Usage for better team collaboration and consistent dev environment

This works on both mac, linux or window:

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

Open http://damp.acme.dev (http + https modes) to check it out.

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

Open http://damp.acme.review (http + https modes) to check it out.

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
