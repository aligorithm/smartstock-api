---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost:8000/docs/collection.json)
<!-- END_INFO -->

#Brand
<!-- START_e0df1f6f01635b944df5331dbed358d6 -->
## api/brand

> Example request:

```bash
curl -X GET "http://localhost:8000/api/brand" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/brand",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[
    {
        "id": 1,
        "name": "A3lXuu",
        "created_at": null,
        "updated_at": null
    }
]
```

### HTTP Request
`GET api/brand`

`HEAD api/brand`


<!-- END_e0df1f6f01635b944df5331dbed358d6 -->

<!-- START_f02f6a8ccd61c186e96e4ce8775cfa5a -->
## Operations on Brand resource

All methods require Authorisation header

> Example request:

```bash
curl -X GET "http://localhost:8000/api/brand/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/brand/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/brand/create`

`HEAD api/brand/create`


<!-- END_f02f6a8ccd61c186e96e4ce8775cfa5a -->

<!-- START_3910324459f124f3ea9c178d9c278861 -->
## api/brand

> Example request:

```bash
curl -X POST "http://localhost:8000/api/brand" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/brand",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/brand`


<!-- END_3910324459f124f3ea9c178d9c278861 -->

<!-- START_214331d6f87ff423beef64e9cd8b2b55 -->
## api/brand/{brand}

> Example request:

```bash
curl -X GET "http://localhost:8000/api/brand/{brand}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/brand/{brand}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "id": 1,
    "name": "A3lXuu",
    "created_at": null,
    "updated_at": null
}
```

### HTTP Request
`GET api/brand/{brand}`

`HEAD api/brand/{brand}`


<!-- END_214331d6f87ff423beef64e9cd8b2b55 -->

<!-- START_09fe63e971ad37aee194ba1390877a96 -->
## api/brand/{brand}/edit

> Example request:

```bash
curl -X GET "http://localhost:8000/api/brand/{brand}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/brand/{brand}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/brand/{brand}/edit`

`HEAD api/brand/{brand}/edit`


<!-- END_09fe63e971ad37aee194ba1390877a96 -->

<!-- START_74d705ff5986d604dca81e7cb47895df -->
## api/brand/{brand}

> Example request:

```bash
curl -X PUT "http://localhost:8000/api/brand/{brand}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/brand/{brand}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/brand/{brand}`

`PATCH api/brand/{brand}`


<!-- END_74d705ff5986d604dca81e7cb47895df -->

<!-- START_38ebeb9ea1755dadb881b7471e4a1211 -->
## api/brand/{brand}

> Example request:

```bash
curl -X DELETE "http://localhost:8000/api/brand/{brand}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/brand/{brand}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/brand/{brand}`


<!-- END_38ebeb9ea1755dadb881b7471e4a1211 -->

#Category
<!-- START_22914fe6912f4d9035a8dd28ecc1b0c1 -->
## api/category

> Example request:

```bash
curl -X GET "http://localhost:8000/api/category" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/category",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[
    {
        "id": 1,
        "name": "iHDatg",
        "created_at": null,
        "updated_at": null
    }
]
```

### HTTP Request
`GET api/category`

`HEAD api/category`


<!-- END_22914fe6912f4d9035a8dd28ecc1b0c1 -->

<!-- START_f35d3dace4903c7a90c834bb8479547f -->
## Operations on Category resource

All methods require Authorisation header

> Example request:

```bash
curl -X GET "http://localhost:8000/api/category/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/category/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/category/create`

`HEAD api/category/create`


<!-- END_f35d3dace4903c7a90c834bb8479547f -->

<!-- START_894ef06ce7a41cb47f9c434fcd778d9a -->
## api/category

> Example request:

```bash
curl -X POST "http://localhost:8000/api/category" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/category",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/category`


<!-- END_894ef06ce7a41cb47f9c434fcd778d9a -->

<!-- START_9852bd440c1cdc8ef5f91f561805f93d -->
## api/category/{category}

> Example request:

```bash
curl -X GET "http://localhost:8000/api/category/{category}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/category/{category}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "id": 1,
    "name": "iHDatg",
    "created_at": null,
    "updated_at": null
}
```

### HTTP Request
`GET api/category/{category}`

`HEAD api/category/{category}`


<!-- END_9852bd440c1cdc8ef5f91f561805f93d -->

<!-- START_9639a02ee0aa6107af55d8169d9714c3 -->
## api/category/{category}/edit

> Example request:

```bash
curl -X GET "http://localhost:8000/api/category/{category}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/category/{category}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/category/{category}/edit`

`HEAD api/category/{category}/edit`


<!-- END_9639a02ee0aa6107af55d8169d9714c3 -->

<!-- START_ed2985a22796532e66be664ff9783124 -->
## api/category/{category}

> Example request:

```bash
curl -X PUT "http://localhost:8000/api/category/{category}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/category/{category}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/category/{category}`

`PATCH api/category/{category}`


<!-- END_ed2985a22796532e66be664ff9783124 -->

<!-- START_c663adad7473b698445af374c584ba20 -->
## api/category/{category}

> Example request:

```bash
curl -X DELETE "http://localhost:8000/api/category/{category}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/category/{category}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/category/{category}`


<!-- END_c663adad7473b698445af374c584ba20 -->

#Customer
<!-- START_090eafb10c7d44d20bf2fc197d5c2736 -->
## api/customer

> Example request:

```bash
curl -X GET "http://localhost:8000/api/customer" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/customer",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[]
```

### HTTP Request
`GET api/customer`

`HEAD api/customer`


<!-- END_090eafb10c7d44d20bf2fc197d5c2736 -->

<!-- START_18b4983741f217235f3b4c599f638b4d -->
## Operations on Customer resource

All methods require Authorisation header

> Example request:

```bash
curl -X GET "http://localhost:8000/api/customer/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/customer/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/customer/create`

`HEAD api/customer/create`


<!-- END_18b4983741f217235f3b4c599f638b4d -->

<!-- START_db113b5d97752f1fd361aab679155796 -->
## api/customer

> Example request:

```bash
curl -X POST "http://localhost:8000/api/customer" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/customer",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/customer`


<!-- END_db113b5d97752f1fd361aab679155796 -->

<!-- START_23040e8839d2e93d8186c80f87f1d822 -->
## api/customer/{customer}

> Example request:

```bash
curl -X GET "http://localhost:8000/api/customer/{customer}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/customer/{customer}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{}
```

### HTTP Request
`GET api/customer/{customer}`

`HEAD api/customer/{customer}`


<!-- END_23040e8839d2e93d8186c80f87f1d822 -->

<!-- START_1d42c1fd65ddd78c2e08670eb0d4e58f -->
## api/customer/{customer}/edit

> Example request:

```bash
curl -X GET "http://localhost:8000/api/customer/{customer}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/customer/{customer}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/customer/{customer}/edit`

`HEAD api/customer/{customer}/edit`


<!-- END_1d42c1fd65ddd78c2e08670eb0d4e58f -->

<!-- START_cb10ade039e7ea7de804734a9adcdebe -->
## api/customer/{customer}

> Example request:

```bash
curl -X PUT "http://localhost:8000/api/customer/{customer}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/customer/{customer}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/customer/{customer}`

`PATCH api/customer/{customer}`


<!-- END_cb10ade039e7ea7de804734a9adcdebe -->

<!-- START_3cbd86245dc8d01d781b200322e14482 -->
## api/customer/{customer}

> Example request:

```bash
curl -X DELETE "http://localhost:8000/api/customer/{customer}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/customer/{customer}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/customer/{customer}`


<!-- END_3cbd86245dc8d01d781b200322e14482 -->

#Product

Operations on Products
<!-- START_d50127a607e403449e988ed24cc511e3 -->
## api/product

> Example request:

```bash
curl -X GET "http://localhost:8000/api/product" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/product",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[
    {
        "id": 1,
        "name": "AIzPwF",
        "description": "HsEeROGjuR",
        "code": "fU4pBZJXTr",
        "price": "20",
        "quantity": 0,
        "brand_id": 1,
        "category_id": 1,
        "created_at": null,
        "updated_at": null
    }
]
```

### HTTP Request
`GET api/product`

`HEAD api/product`


<!-- END_d50127a607e403449e988ed24cc511e3 -->

<!-- START_37054d86ee56e63ac0b9564851abb3d9 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "http://localhost:8000/api/product/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/product/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/product/create`

`HEAD api/product/create`


<!-- END_37054d86ee56e63ac0b9564851abb3d9 -->

<!-- START_2d62ba7cf16a7d6db447375e13e86c34 -->
## api/product

> Example request:

```bash
curl -X POST "http://localhost:8000/api/product" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/product",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/product`


<!-- END_2d62ba7cf16a7d6db447375e13e86c34 -->

<!-- START_9bfa1a3fcf0ac9c9d6938d433735756c -->
## api/product/{product}

> Example request:

```bash
curl -X GET "http://localhost:8000/api/product/{product}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/product/{product}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "id": 1,
    "name": "AIzPwF",
    "description": "HsEeROGjuR",
    "code": "fU4pBZJXTr",
    "price": "20",
    "quantity": 0,
    "brand_id": 1,
    "category_id": 1,
    "created_at": null,
    "updated_at": null
}
```

### HTTP Request
`GET api/product/{product}`

`HEAD api/product/{product}`


<!-- END_9bfa1a3fcf0ac9c9d6938d433735756c -->

<!-- START_51c32087ba9a8153862b343f2439f14a -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "http://localhost:8000/api/product/{product}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/product/{product}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/product/{product}/edit`

`HEAD api/product/{product}/edit`


<!-- END_51c32087ba9a8153862b343f2439f14a -->

<!-- START_682327ab9f9deab00b7c603486ad935a -->
## api/product/{product}

> Example request:

```bash
curl -X PUT "http://localhost:8000/api/product/{product}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/product/{product}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/product/{product}`

`PATCH api/product/{product}`


<!-- END_682327ab9f9deab00b7c603486ad935a -->

<!-- START_587b06cc0dc038b2e049f3a1baa2593b -->
## api/product/{product}

> Example request:

```bash
curl -X DELETE "http://localhost:8000/api/product/{product}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/product/{product}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/product/{product}`


<!-- END_587b06cc0dc038b2e049f3a1baa2593b -->

#Sale
<!-- START_9fff87c779609dca2de12332e4a7dd1d -->
## api/sale

> Example request:

```bash
curl -X GET "http://localhost:8000/api/sale" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/sale",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[]
```

### HTTP Request
`GET api/sale`

`HEAD api/sale`


<!-- END_9fff87c779609dca2de12332e4a7dd1d -->

<!-- START_a02611d48475cfadd27ee974d8794fd6 -->
## Operations on Sale resource

All methods require Authorisation header

> Example request:

```bash
curl -X GET "http://localhost:8000/api/sale/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/sale/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/sale/create`

`HEAD api/sale/create`


<!-- END_a02611d48475cfadd27ee974d8794fd6 -->

<!-- START_3b5b917d24e68c31dccd2aed4fa791c9 -->
## api/sale

> Example request:

```bash
curl -X POST "http://localhost:8000/api/sale" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/sale",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/sale`


<!-- END_3b5b917d24e68c31dccd2aed4fa791c9 -->

<!-- START_c732134794684202897daf18aa3e031c -->
## api/sale/{sale}

> Example request:

```bash
curl -X GET "http://localhost:8000/api/sale/{sale}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/sale/{sale}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{}
```

### HTTP Request
`GET api/sale/{sale}`

`HEAD api/sale/{sale}`


<!-- END_c732134794684202897daf18aa3e031c -->

<!-- START_a930d61a08dab5875e86c90b24662b22 -->
## api/sale/{sale}/edit

> Example request:

```bash
curl -X GET "http://localhost:8000/api/sale/{sale}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/sale/{sale}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/sale/{sale}/edit`

`HEAD api/sale/{sale}/edit`


<!-- END_a930d61a08dab5875e86c90b24662b22 -->

<!-- START_b49a91044c292e64b36dad3c69c592fd -->
## api/sale/{sale}

> Example request:

```bash
curl -X PUT "http://localhost:8000/api/sale/{sale}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/sale/{sale}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/sale/{sale}`

`PATCH api/sale/{sale}`


<!-- END_b49a91044c292e64b36dad3c69c592fd -->

<!-- START_f8c1b1f9d919cf624a78322df6c43241 -->
## api/sale/{sale}

> Example request:

```bash
curl -X DELETE "http://localhost:8000/api/sale/{sale}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/sale/{sale}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/sale/{sale}`


<!-- END_f8c1b1f9d919cf624a78322df6c43241 -->

<!-- START_6df85b3b5aff0e76c1a2a2caa7495ee9 -->
## api/sale/add/{id}

> Example request:

```bash
curl -X PUT "http://localhost:8000/api/sale/add/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/sale/add/{id}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/sale/add/{id}`


<!-- END_6df85b3b5aff0e76c1a2a2caa7495ee9 -->

<!-- START_aa35f540807f5c4ec9931142b0925060 -->
## api/sale/subtract/{id}

> Example request:

```bash
curl -X PUT "http://localhost:8000/api/sale/subtract/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/sale/subtract/{id}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/sale/subtract/{id}`


<!-- END_aa35f540807f5c4ec9931142b0925060 -->

#general
<!-- START_638687f1aca2f1e69b360d1516c7c1f9 -->
## api/user/register

> Example request:

```bash
curl -X POST "http://localhost:8000/api/user/register" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/user/register",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/user/register`


<!-- END_638687f1aca2f1e69b360d1516c7c1f9 -->

<!-- START_57e3b4272508c324659e49ba5758c70f -->
## api/user/login

> Example request:

```bash
curl -X POST "http://localhost:8000/api/user/login" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/user/login",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/user/login`


<!-- END_57e3b4272508c324659e49ba5758c70f -->

