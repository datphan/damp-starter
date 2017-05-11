# Fast Install

With `docker` pre-installed:

```
$ git fetch <this>
$ docker-compose up -d
```

Then go to `localhost` and enjoy!

*Note*: for those who use `nginx` insted of `apache`, check out [demp-starter](https://github.com/acme101/demp-starter).

## Higher

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
      "damp.acme.dev", "damp.acme.prod"
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
$ vagrant ssh
$ cd workspace/damp-starter
$ docker-compose up -d
```

Open dev.damp.acme.dev (http + https modes) to check it out.

Further details can be found here: https://github.com/acme101/dev-setup/blob/master/README.md


## Prod Mode

To run prod mode on the current source code.

```
$ vagrant ssh
$ cd workspace/damp-starter
$ docker-compose -f docker-compose.prod.yml up -d 
```

Open dev.damp.acme.dev (http + https modes) to check it out.

## Tips

To view logs

```
$ docker-compose up -d && docker-compose logs -f
```

