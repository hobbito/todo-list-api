# TO-DO List Application 
- Allow user to create, update and delete a task
- Allow user to change task status
- Allow user to filter the task list
- Allow user to sort the task list


## Installation
- composer install

- Copy .env.example and name it .env

- Add database configuration

- Migrate 
```bash
php artisan migrate:fresh --seed
```



## API Endpoints

Application has several enpoints

### Task List

<b>Task endpoints.</b>

<i>Base URL:</i> ```/api/v1/tasks```

<table border="1" width="100%">
    <thead>
        <tr>
            <th>METHOD</td>
            <th>ENDPOINT</td>
            <th>PARAMETERS GET</td>
            <th>RETURNS</td>
            <th>SUCCESS CODE</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>GET</td>
            <td><a href="#">/api/v1/tasks</a></td>
            <td></td>
            <td><i>array of Tasks</i></td>
            <td>200</td>
        </tr>
    </tbody>
</table>

Response example

```json
{
   "data":[
      {
         "id":1,
         "title":"Deserunt voluptas saepe et dolores quo voluptatum.",
         "description":"Est non minus nemo id quae optio. Libero consequatur nemo consequatur doloribus maxime ipsum aspernatur cum. In et vel maiores totam magnam eos."
      },
   ],
   "links":{
      "first":"http://todo-list-api.loc/api/v1/tasks?page=1",
      "last":"http://todo-list-api.loc/api/v1/tasks?page=10",
      "prev":null,
      "next":"http://todo-list-api.loc/api/v1/tasks?page=2"
   },
   "meta":{
      "current_page":1,
      "from":1,
      "last_page":10,
      "links":[
         {
            "url":null,
            "label":"&laquo; Previous",
            "active":false
         },
         {
            "url":"http://todo-list-api.loc/api/v1/tasks?page=1",
            "label":1,
            "active":true
         },
         {
            "url":"http://todo-list-api.loc/api/v1/tasks?page=2",
            "label":"Next &raquo;",
            "active":false
         }
      ],
      "path":"http://todo-list-api.loc/api/v1/tasks",
      "per_page":5,
      "to":5,
      "total":50
   }
}
```



### New Task

<b>Task endpoints.</b>

<i>Base URL:</i> ```/api/v1/tasks```

<table border="1" width="100%">
    <thead>
        <tr>
            <th>METHOD</td>
            <th>ENDPOINT</td>
            <th>PARAMETERS GET</td>
            <th>RETURNS</td>
            <th>SUCCESS CODE</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>POST</td>
            <td><a href="#">/api/v1/tasks</a></td>
            <td></td>
            <td><i>array of Tasks</i></td>
            <td>200</td>
        </tr>
    </tbody>
</table>

Request post params
```json
{
    "title":"Deserunt voluptas saepe et dolores quo voluptatum.",
    "description":"Est non minus nemo id quae optio. Libero consequatur nemo consequatur doloribus maxime ipsum aspernatur cum. In et vel maiores totam magnam eos."
}
```

Response example

```json
{
   "data":{
      "id":1,
      "title":"Deserunt voluptas saepe et dolores quo voluptatum.",
      "description":"Est non minus nemo id quae optio. Libero consequatur nemo consequatur doloribus maxime ipsum aspernatur cum. In et vel maiores totam magnam eos."
   }
}
```


## Screen Shot

