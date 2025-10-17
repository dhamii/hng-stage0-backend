# Cat API Controller - README

## Overview

This is a simple Laravel controller that fetches a random cat fact from the [Cat Facts API](https://catfact.ninja/fact) and returns it as a JSON response along with user information and a timestamp.


---

## Setup Instructions

### 1️⃣ Clone the Repository

Clone the repository using git clone https://github.com/dhamii/hng-stage0-backend/

### 2️⃣ Install Dependencies

* Laravel 7.x or above
* PHP 8.x
* HTTP Client (Laravel built-in, no extra package needed)

Install dependencies:

```bash
composer install
```
## Environment Variables

Create and add your database credentials 

---

## Run
php artisan migrate
### 3️⃣ Run the Laravel Server

```bash
php artisan serve
```

Visit: `http://127.0.0.1:8000/me`

---


---


## Example Response

```json
{
  "status": "success",
  "user": {
    "email": "teddydhamivee@gmail.com",
    "name": "Tedunjaye Oluwadamilola Joseph",
    "stack": "PHP"
  },
  "timestamp": "2025-10-17T15:50:00.000000Z",
  "fact": "Cats sleep 70% of their lives."
}
```

If the API fails:

```json
{
  "status": "error",
  "message": "Could not fetch facts"
}
```

---

## Notes

* The controller uses Laravel’s `Http` facade to call an external API.
* The response is always JSON and includes a `Content-Type` header.
