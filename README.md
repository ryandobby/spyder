# Spyder

1. Using the attached CSV file, create an HTTP API that exposes the data as JSON

2. I'll leave it up to you as far as how you want to structure the backend to store and serve the data

3. Code your solution with PHP (whatever libraries and frameworks is up to you)

4. Provide the following query endpoint(s)

    a. Get all stores by a provided state abbreviation

    b. Get a single store by the store number

5. When you're done, please turn in 1) a link to the Git repository for the project code that implements the functionality 2) a link to the running API for me to test out (including any necessary authentication and endpoint details).

---

## API Token

`1|UTozHG0VxaYC7Vf7h3kTiZAXRyVxhVV3HmB3DbHB`

(Note: This is an authorization bearer token)

```
HEADER Accept application/json
```

## Usage

#### Store Show Endpoint:

```
GET spyder.ryandobyns.com/api/stores/{store_number}
```

#### Stores by State Endpoint:

```
POST spyder.ryandobyns.com/api/stores/state

PARAM 'state' => 'OK'
```

(Note: State abbreviations must be a string with two characters, case insensitive.)
