## User API


### `GET` users
```
/users
```
Get list of user

#### Request header

| Key | Value |
|---|---|
| Accept | application/json |

#### Sample response

```json
{
    "current_page": 1,
    "data": [
        {
            "id": 1,
            "full_name": "Dr. Alene Mills",
            "email": "assunta.stark@example.com",
            "is_admin": 0,
            "phone": "1-947-773-7941 x82122",
            "gender": "male",
            "bio": "Consequuntur voluptas quia molestias nisi odit ullam voluptate. Minus at voluptas sit id.",
            "created_at": "2017-10-27 18:00:41",
            "updated_at": "2017-10-27 18:00:41"
        },
        {
            "id": 2,
            "full_name": "Mr. Alexandro Emard",
            "email": "jon.mcclure@example.net",
            "is_admin": 0,
            "phone": "(709) 350-6751 x82285",
            "gender": "male",
            "bio": "Saepe rerum consectetur dolores et repellendus laboriosam itaque.",
            "created_at": "2017-10-27 18:00:41",
            "updated_at": "2017-10-27 18:00:41"
        },
        {
            "id": 3,
            "full_name": "Mr. Isaias Lockman Sr.",
            "email": "moen.rafaela@example.org",
            "is_admin": 1,
            "phone": "947.861.8977 x688",
            "gender": "male",
            "bio": "Aut omnis aspernatur sint omnis unde aliquam vel.",
            "created_at": "2017-10-27 18:00:41",
            "updated_at": "2017-10-27 18:00:41"
        },
        {
            "id": 4,
            "full_name": "Julie Koepp",
            "email": "npowlowski@example.com",
            "is_admin": 1,
            "phone": "705.318.0623 x577",
            "gender": "male",
            "bio": "Aut ratione doloremque quas repudiandae fugiat beatae.",
            "created_at": "2017-10-27 18:00:41",
            "updated_at": "2017-10-27 18:00:41"
        },
        {
            "id": 5,
            "full_name": "Dr. Frederik Tromp III",
            "email": "qjacobs@example.net",
            "is_admin": 0,
            "phone": "846.440.0200 x3639",
            "gender": "male",
            "bio": "Voluptatem voluptas velit in debitis.",
            "created_at": "2017-10-27 18:00:41",
            "updated_at": "2017-10-27 18:00:41"
        },
        {
            "id": 6,
            "full_name": "Dr. Cara Beier",
            "email": "oturcotte@example.net",
            "is_admin": 0,
            "phone": "543-700-2062",
            "gender": "male",
            "bio": "Adipisci quod officiis nam eum architecto vero voluptatem dolor. Voluptatum ut ea culpa.",
            "created_at": "2017-10-27 18:00:41",
            "updated_at": "2017-10-27 18:00:41"
        },
        {
            "id": 7,
            "full_name": "Giovani Dibbert",
            "email": "casper93@example.net",
            "is_admin": 1,
            "phone": "704.548.4803",
            "gender": "male",
            "bio": "Molestiae aut et rem nisi. Deleniti possimus tenetur nobis sit enim blanditiis quo.",
            "created_at": "2017-10-27 18:00:41",
            "updated_at": "2017-10-27 18:00:41"
        },
        {
            "id": 8,
            "full_name": "Major Flatley",
            "email": "freida24@example.com",
            "is_admin": 0,
            "phone": "294-966-4169",
            "gender": "male",
            "bio": "Soluta voluptas blanditiis nesciunt sunt qui nam soluta aut.",
            "created_at": "2017-10-27 18:00:41",
            "updated_at": "2017-10-27 18:00:41"
        },
        {
            "id": 9,
            "full_name": "Mr. Dorthy Torp III",
            "email": "jweimann@example.com",
            "is_admin": 0,
            "phone": "656-536-6806",
            "gender": "male",
            "bio": "Praesentium eum tempore atque nihil officiis.",
            "created_at": "2017-10-27 18:00:41",
            "updated_at": "2017-10-27 18:00:41"
        },
        {
            "id": 10,
            "full_name": "Prof. Omer Schmitt MD",
            "email": "wunsch.herta@example.net",
            "is_admin": 1,
            "phone": "260-766-1147",
            "gender": "male",
            "bio": "Eveniet quia voluptates nobis quia. Esse rerum impedit voluptatum fugit maiores deserunt quia nulla.",
            "created_at": "2017-10-27 18:00:41",
            "updated_at": "2017-10-27 18:00:41"
        }
    ],
    "first_page_url": "http://sport-social.ddns.net/users?page=1",
    "from": 1,
    "last_page": 11,
    "last_page_url": "http://sport-social.ddns.net/users?page=11",
    "next_page_url": "http://sport-social.ddns.net/users?page=2",
    "path": "http://sport-social.ddns.net/users",
    "per_page": 10,
    "prev_page_url": null,
    "to": 10,
    "total": 105
}
}
```

### `POST` create user
```
/users
```
Registry a user

#### Parameters
| Key | Type | Required | Description |
|---|---|---|---|
| full_name | String | required | Name of user |
| email | String | required | email to login |
| password | String | required | password |
| password_confirmation | String | required | password confirmation |

#### Request header
| Key | Value |
|---|---|
| Accept | application/json |
|Content-Type| application/json |

#### Sample Request body
```json
{
  "full_name": "Van Duc Dung",
  "email": "vandung@test.email.com",
  "password": "123456",
  "password_confirmation": "123456"
}
```

#### Sample Response
```json
{
  "data": {
    "id": 74,
    "full_name": "dungvan2512",
    "email": "dungvan@test.email.com",
    "gender": "male",
    "phone": null,
    "bio": null,
    "is_admin": 1,
    "created_at": "2017-09-01 02:22:32",
    "updated_at": "2017-09-01 02:22:32",
  }
}
```
### `POST` user login

```
/users/login
```
Login system

#### Parameters
| Key | Type | Required | Description |
|---|---|---|---|
| email | String | required | email to login |
| password | String | required | password |

#### Request header
| Key | Value |
|---|---|
| Accept | application/json |
| Content-Type | application/json |

#### Sample Request body
```json
{
  "email": "vudang@gmail.com",
  "password": "123456"
}
```

#### Sample Response
```json
{
  "data": {
    "token_type": "Bearer",
    "expires_in": 1295999,
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjFhYTRjODhjN2ViMzUyYjZlZjcyMDVmMWY1MjE5ZTUwOTcxNTlmYTgwNjRmMmIwNTlhZGQ5NzZhOWIzYWIzMWEyZmRiNWIzMDA0ZmYwNTkyIn0.eyJhdWQiOiIyIiwianRpIjoiMWFhNGM4OGM3ZWIzNTJiNmVmNzIwNWYxZjUyMTllNTA5NzE1OWZhODA2NGYyYjA1OWFkZDk3NmE5YjNhYjMxYTJmZGI1YjMwMDRmZjA1OTIiLCJpYXQiOjE1MDQyMjQyNDcsIm5iZiI6MTUwNDIyNDI0NywiZXhwIjoxNTA1NTIwMjQ2LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.dWV3xbSfV_yl-oDEtxtkjyjfY0YovJ_TWE544-yFLP-PqtcXbfaGmxqGq5XhHGlo4HnOuCImHQmC602flFpryN0svlMiBRtKQwgAIwlI0dIS9qK2FK5DRFLPrytqYbVI5bVQ0QQ0mB0R4AUGVugt1l6MAaEw2POQkLqNxGJiQRUm-8A4QXIr1vex5U5V7V4OQxI2S1DAFWrZcn1UuAGB3VdGPSl1M95TnkWZ92-Wu6nPrmEoMFpp6EiHDYvIJ0ooU2-OC88S-P52rg_zspklIeZpvr98HfR6PhT1WscLHaR-dyga9MgrL2pYzJK1",
    "refresh_token": "def5020085af64a088aebc71c4746a7ec59fc7a92e40fcd48c225f464ccb0b45ee88fd89c867486eec01f2dd99adb76fceb04a0c4dca4e6bc849252f382c0404a358a602532cb55084f029f3e746450ec2d1e479c9eca263c93ec1e58c564c2abc1dfdd545810113bee9bda63da933cc84a1a131a7bdfe906d01195a9fdbd63e93bc543a098c99c20388fbbee9d949adbb7ec7167fd0da9d002c5fcd8c109efc75f83c424677757704d484b9322dbc02c292db9dcf72c30b8e6ea7237ece39bfc5015e1fe948a63913b9e2bd6037780d51bc5c193825c8917ee06e3e6c711a41c44c8f326e91c0a4a0e180ed3bf82cde06f57895e445e27ba3bed13948b86c1cf845a9b0549d8b02661ae39251d6983cba57292945b1cc3df6031e53a0f6f0aa0060071e81b96f61bbf4ca9a3f3b72abd22dbb9b1f3036f795257767ed8283fd2a4d9088a258749303296dd9085565f99a733a9b3959c5d26fb41dac19a87a"
  }
}
```


### `GET` User
```
/api/users/{id}
```
Get information about a current user login.

#### Request header
| Key | Value |
|---|---|
| Accept | application/json |
| Authorization | {token_type} {access_token} |

#### Sample Response
```json
{
  "data": {
    "id": 74,
    "full_name": "dungvan2512",
    "email": "dungvan@test.email.com",
    "birthday": null,
    "gender": 0,
    "address": null,
    "phone_number": null,
    "image": "http://foodmarket.com/images/users/default.jpg",
    "is_admin": 1,
    "is_active": 0,
    "created_at": "2017-09-01 02:22:32",
    "updated_at": "2017-09-01 02:22:32",
    "deleted_at": null
  },
  "success": true
}
```

### `PUT` user
```
/users/{id}
```
Update profile of current user

#### Parameters
| Key | Type | Required | Description |
|---|---|---|---|
| full_name | String | required | name of user |
| email | String | required | email to login |
| gender | Integer | required | "female"  or Default: "male" |
| phone | String | required | phone number of user |
| bio | Text | nullable | user history |
| password | String | nullable | password |
| password_confirmation | String | nullable | password confirmation |

#### Request header

| Key | Value |
|---|---|
| Accept | application/json |
|Content-Type| application/json |
| Authorization | {token_type} {access_token} |

#### Sample Request body
```json
{
  "full_name":"dungvan25123",
  "gender": "male",
  "phone_number": "123456789",
  "bio": "test bio"
}
```

#### Sample Response
```json
{
    "data": {
        "id": 74,
        "full_name": "dungvan25123",
        "email": "dungvan@test.email.com",
        "gender": "male",
        "phone": "123456789",
        "bio": "test bio",
        "is_admin": 1,
        "created_at": "2017-09-01 02:22:32",
        "updated_at": "2017-10-01 02:22:32",
    }
}
```

### `DELETE` user
```
/users/{id}
```
The admin users delete another user

#### Request header

| Key | Value |
|---|---|
| Accept | application/json |
| Authorization | {token_type} {access_token} |

#### Sample Response
```json
{
  "data": {
      "id": 74,
      "full_name": "dungvan25123",
      "email": "dungvan@test.email.com",
      "gender": "male",
      "phone": "123456789",
      "bio": "test bio",
      "is_admin": 1,
      "created_at": "2017-09-01 02:22:32",
      "updated_at": "2017-10-01 02:22:32",
  }
}
```
