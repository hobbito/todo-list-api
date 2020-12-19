# TO-DO List Application 
- Create, Update & Delete a task
- Update task status

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
         "title":"Sapiente perferendis enim aut magni repellat praesentium.",
         "short_description":"Sunt cupiditate iste enim quaerat unde ut omnis. Q...",
         "description":"Sunt cupiditate iste enim quaerat unde ut omnis. Quidem odio quam temporibus optio eos sunt. Optio sint est eum. Quod totam laborum aut ab rerum vitae distinctio commodi.",
         "status":{
            "id":1,
            "name":"Pending"
         },
         "task_status_id":1,
         "created_at":"19:53 19-12-2020"
      },
      {
         "id":2,
         "title":"Voluptatem magni omnis qui assumenda totam optio.",
         "short_description":"Corrupti magni eligendi dolorum. Id vel praesentiu...",
         "description":"Corrupti magni eligendi dolorum. Id vel praesentium magnam. Odio ducimus ut rerum. Laudantium assumenda reiciendis sed quod consequatur.",
         "status":{
            "id":1,
            "name":"Pending"
         },
         "task_status_id":1,
         "created_at":"19:53 19-12-2020"
      }
   ]
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

## List of things to improve
- Add dockerfile 
- Add API endpoints tests
- Add pagination to task list
- Add filters to task list
- Better API responses
