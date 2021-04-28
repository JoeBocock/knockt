# Slot


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/slots" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"row_id":14}'

```

```javascript
const url = new URL(
    "http://localhost/api/slots"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "row_id": 14
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/slots',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'json' => [
            'row_id' => 14,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/slots'
payload = {
    "row_id": 14
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers, json=payload)
response.json()
```


<div id="execution-results-GETapi-slots" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-slots"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-slots"></code></pre>
</div>
<div id="execution-error-GETapi-slots" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-slots"></code></pre>
</div>
<form id="form-GETapi-slots" data-method="GET" data-path="api/slots" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-slots', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-slots" onclick="tryItOut('GETapi-slots');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-slots" onclick="cancelTryOut('GETapi-slots');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-slots" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/slots</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>row_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="row_id" data-endpoint="GETapi-slots" data-component="body" required  hidden>
<br>

</p>

</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/slots" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"nisi","row_id":11,"product_id":2}'

```

```javascript
const url = new URL(
    "http://localhost/api/slots"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "nisi",
    "row_id": 11,
    "product_id": 2
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/slots',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'json' => [
            'name' => 'nisi',
            'row_id' => 11,
            'product_id' => 2,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/slots'
payload = {
    "name": "nisi",
    "row_id": 11,
    "product_id": 2
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```


<div id="execution-results-POSTapi-slots" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-slots"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-slots"></code></pre>
</div>
<div id="execution-error-POSTapi-slots" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-slots"></code></pre>
</div>
<form id="form-POSTapi-slots" data-method="POST" data-path="api/slots" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-slots', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-slots" onclick="tryItOut('POSTapi-slots');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-slots" onclick="cancelTryOut('POSTapi-slots');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-slots" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/slots</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-slots" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>row_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="row_id" data-endpoint="POSTapi-slots" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>product_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="product_id" data-endpoint="POSTapi-slots" data-component="body" required  hidden>
<br>

</p>

</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/slots/412675" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/slots/412675"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/slots/412675',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/slots/412675'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


<div id="execution-results-GETapi-slots--slot-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-slots--slot-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-slots--slot-"></code></pre>
</div>
<div id="execution-error-GETapi-slots--slot-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-slots--slot-"></code></pre>
</div>
<form id="form-GETapi-slots--slot-" data-method="GET" data-path="api/slots/{slot}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-slots--slot-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-slots--slot-" onclick="tryItOut('GETapi-slots--slot-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-slots--slot-" onclick="cancelTryOut('GETapi-slots--slot-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-slots--slot-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/slots/{slot}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>slot</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="slot" data-endpoint="GETapi-slots--slot-" data-component="url" required  hidden>
<br>

</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/slots/1.9755553" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"ut","row_id":11}'

```

```javascript
const url = new URL(
    "http://localhost/api/slots/1.9755553"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "ut",
    "row_id": 11
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/api/slots/1.9755553',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'json' => [
            'name' => 'ut',
            'row_id' => 11,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/slots/1.9755553'
payload = {
    "name": "ut",
    "row_id": 11
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()
```


<div id="execution-results-PUTapi-slots--slot-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-slots--slot-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-slots--slot-"></code></pre>
</div>
<div id="execution-error-PUTapi-slots--slot-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-slots--slot-"></code></pre>
</div>
<form id="form-PUTapi-slots--slot-" data-method="PUT" data-path="api/slots/{slot}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-slots--slot-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-slots--slot-" onclick="tryItOut('PUTapi-slots--slot-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-slots--slot-" onclick="cancelTryOut('PUTapi-slots--slot-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-slots--slot-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/slots/{slot}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/slots/{slot}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>slot</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="slot" data-endpoint="PUTapi-slots--slot-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-slots--slot-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>row_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="row_id" data-endpoint="PUTapi-slots--slot-" data-component="body" required  hidden>
<br>

</p>

</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/slots/6.88" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/slots/6.88"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/api/slots/6.88',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/slots/6.88'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
```


<div id="execution-results-DELETEapi-slots--slot-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-slots--slot-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-slots--slot-"></code></pre>
</div>
<div id="execution-error-DELETEapi-slots--slot-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-slots--slot-"></code></pre>
</div>
<form id="form-DELETEapi-slots--slot-" data-method="DELETE" data-path="api/slots/{slot}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-slots--slot-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-slots--slot-" onclick="tryItOut('DELETEapi-slots--slot-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-slots--slot-" onclick="cancelTryOut('DELETEapi-slots--slot-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-slots--slot-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/slots/{slot}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>slot</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="slot" data-endpoint="DELETEapi-slots--slot-" data-component="url" required  hidden>
<br>

</p>
</form>


## Purchase the product in the given slot.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/slots/252361.5/purchase" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"amount":18}'

```

```javascript
const url = new URL(
    "http://localhost/api/slots/252361.5/purchase"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "amount": 18
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/slots/252361.5/purchase',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'json' => [
            'amount' => 18,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/slots/252361.5/purchase'
payload = {
    "amount": 18
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```


<div id="execution-results-POSTapi-slots--slot--purchase" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-slots--slot--purchase"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-slots--slot--purchase"></code></pre>
</div>
<div id="execution-error-POSTapi-slots--slot--purchase" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-slots--slot--purchase"></code></pre>
</div>
<form id="form-POSTapi-slots--slot--purchase" data-method="POST" data-path="api/slots/{slot}/purchase" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-slots--slot--purchase', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-slots--slot--purchase" onclick="tryItOut('POSTapi-slots--slot--purchase');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-slots--slot--purchase" onclick="cancelTryOut('POSTapi-slots--slot--purchase');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-slots--slot--purchase" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/slots/{slot}/purchase</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>slot</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="slot" data-endpoint="POSTapi-slots--slot--purchase" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>amount</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="amount" data-endpoint="POSTapi-slots--slot--purchase" data-component="body" required  hidden>
<br>

</p>

</form>



