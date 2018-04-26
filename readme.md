# Time to Fly

## Phinx
To get Phinx Database Migration & Seeds working, copy `phinx.yml.example` to `phinx.yml` and update any values needed.

Learn Phinx from their [documentation](http://docs.phinx.org/en/latest/intro.html).

## Docker
### Docker for the first time
To get docker working do the following:

Ensure that `.env` is up to date with database credentials

Generate an encryption key
```
php artisan key:generate
```

Build the docker images and run the containers
```
docker-compose down && docker-compose build && docker-compose up -d
```

### Using Docker
Bring Docker containers up
```
docker-compose up -d
```

Take Docker containers down
```
docker-compose down
```
