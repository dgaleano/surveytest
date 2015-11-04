<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Documentation Survey API</title>
</head>
<body>
<header>
    <h1>Survey API References</h1>
</header>
<nav>
    <a href="#">Home</a>
</nav>
<section>
    <p>Note:Remember change host for you domainhost</p>
    <article>
        <div class="method">POST</div>
        <div class="url">http://host/api/v1/questions/</div>
        <p>
            Here we can create questions with the method post, we need send the variable like example below. Example:
        </p>
        <code>
            curl -X POST -F question='my question' http://host/api/v1/questions
        </code>
    </article>
    <br>
    <article>
        <div class="method">POST</div>
        <div class="url">http://host/api/v1/questions/{id}/options</div>
        <p>
            Here we can create answer option with the method post, we need send the variable like example below. Example:
        </p>
        <code>
            curl -X POST -F option='my option' http://host/api/v1/questions/1/options
        </code>
    </article>
    <br>
    <article>
        <div class="method">GET</div>
        <div class="url">http://host/api/v1/questions</div>
        <p>
            Retrieve all survey question like example below. Example:
        </p>
        <code>
            curl -X GET http://host/api/v1/questions/
        </code>
    </article>
    <br>
    <article>
        <div class="method">GET</div>
        <div class="url">http://host/api/v1/questions/{id}</div>
        <p>
            Retrieve a Question with the id like example below. Example:
        </p>
        <code>
            curl -X GET http://host/api/v1/questions/1
        </code>
    </article>
    <br>
    <article>
        <div class="method">GET</div>
        <div class="url">http://host/api/v1/questions/{id}/options</div>
        <p>
            Retrieve a Question with options like example below. Example:
        </p>
        <code>
            curl -X GET http://host/api/v1/questions/1/options
        </code>
    </article>
    <br>
    <article>
        <div class="method">GET</div>
        <div class="url">http://host/api/v1/questions/{id}/answers</div>
        <p>
            Retrieve the question with its answers like example below. Example:
        </p>
        <code>
            curl -X GET http://host/api/v1/questions/1/answers
        </code>
    </article>
    <br>
    <article>
        <div class="method">PUT</div>
        <div class="url">http://host/api/v1/questions/{id}</div>
        <p>
            Update a question like example below. Example:
        </p>
        <code>
            curl -X POST -F question='my question updated' -F _method='put' http://host/api/v1/questions/1
        </code>
    </article>
    <br>
    <article>
        <div class="method">PUT</div>
        <div class="url">http://host/api/v1/options/{id}</div>
        <p>
            Update a option. Example:
        </p>
        <code>
            curl -X POST -F option='my question' -F _method='put' http://host/api/v1/options/1
        </code>
    </article>
    <br>
    <article>
        <div class="method">POST</div>
        <div class="url">http://host/api/v1/questions/{id}/options</div>
        <p>
            Here we can create answer with the method post, we need send the variable like example below. Example:
        </p>
        <code>
            curl -X POST -F idAnswerOption='1' http://host/api/v1/questions/1/answers
            or
            curl -X POST -F AnswerOption='Football' http://host/api/v1/questions/1/answers
        </code>
    </article>

</section>
</body>
</html>