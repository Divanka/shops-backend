# API

## Маршруты

### Актёры:
#### GET api/actors - получение списка актёров
#### POST api/actors - добавление актёра
#### GET api/actors/{id} - получение конкретного актёра
#### PUT api/actors/{id} - обновление актёра
#### DELETE api/actors/{id} - удаление актёра
#### POST api/actors/{id}/film - добавление фильмов актёру

### Фильмы:
#### GET api/films - получение списка фильмов
#### POST api/films - добавление фильма
#### GET api/films/{id} - получение конкретного фильма
#### PUT api/films/{id} - обновление фильма
#### DELETE api/films/{id} - удаление фильма
#### POST api/films/{id}/actors - добавление актёров фильму
