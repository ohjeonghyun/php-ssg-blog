<?php
require_once "util.php";
require_once "app.php";

$siteTitle = "디자이너 오정현";

// 게시물 5

$article5 = [];
$article5["id"] = 5;
$article5["title"] = "CSS  색";
$article5["regDate"] = "2020-01-21 17:28:15";
$article5["writerName"] = "오정현";
$article5["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article5["tags"]=["CSS"]; 
$article5["body"] = <<<'EOT'
# 개요

CSS에서 색을 표현하는 방법에는 다음과 같이 세 가지 방법이 있습니다. 

 

1. 색상 이름으로 표현

2. RGB 색상값으로 표현

3. 16진수 색상값으로 표현


```html

<style>

    .blue { color: blue; }

    .green { color: green; }

    .silver { color: silver; }

</style>


<style>

    .blue { color: rgb(0,0,255); }

    .green { color: rgb(0,128,0); }

    .silver { color: rgb(192,192,192); }

</style>

<style>

    .blue { color: #0000FF; }

    .green { color: #008000; }

    .silver { color: #C0C0C0; }

</style>


```

EOT;



// 게시물 4
$article4 = [];
$article4["id"] = 4;
$article4["title"] = "CSS 기초 4";
$article4["regDate"] = "2020-01-18 17:28:15";
$article4["writerName"] = "오정현";
$article4["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article4["tags"]=["CSS"];
$article4["body"] = <<<'EOT'
# 개요

스타일 적용의 우선순위
위에서 설명한 스타일 적용 방법들이 혼합되어 사용될 경우, 최종적으로 적용되는 스타일은 다음 순서에 따라 결정됩니다.

 

1. 인라인 스타일 (HTML 요소 내부에 위치함)

2. 내부 / 외부 스타일 시트 (HTML 문서의 head 요소 내부에 위치함)

3. 웹 브라우저 기본 스타일

 

예를 들어 인라인 스타일이 적용된 태그는 내부나 외부 스타일 시트와는 상관없이 무조건 인라인 스타일이 적용됩니다.

또한, 내부 스타일 시트와 외부 스타일 시트는 가장 마지막에 적용된 스타일 시트가 적용됩니다.

- 
```html
<link rel="stylesheet" href="/examples/media/expand_style.css">

...

<h2>이 부분은 외부 스타일 시트만이 적용됩니다.</h2>

<h2 style="color:maroon; text-decoration:line-through"> 이 부분은 인라인 스타일과 외부 스타일 시트가 둘 다 적용됩니다. </h2>


```

EOT;

// 게시물 3
$article3 = [];
$article3["id"] = 3;
$article3["title"] = "CSS 기초 3";
$article3["regDate"] = "2020-01-18 12:12:15";
$article3["writerName"] = "오정현";
$article3["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article3["tags"]=["CSS"];
$article3["body"] = <<<'EOT'
# 개요

CSS를 적용하는 방법
HTML 문서에 CSS 스타일을 적용할 때에는 다음과 같이 세 가지 방법을 사용할 수 있습니다.

 

1. 인라인 스타일(Inline style)

2. 내부 스타일 시트(Internal style sheet)

3. 외부 스타일 시트(External style sheet)

인라인 스타일(Inline style)
인라인 스타일이란 HTML 요소 내부에 style 속성을 사용하여 CSS 스타일을 적용하는 방법입니다.

이러한 인라인 스타일은 해당 요소에만 스타일을 적용할 수 있습니다.


- 

```html
<body>

    <h2 style="color:green; text-decoration:underline">

        인라인 스타일을 이용하여 스타일을 적용하였습니다.

    </h2>

</body>
```


EOT;

// 게시물 2
$article2 = [];
$article2["id"] = 2;
$article2["title"] = "CSS 기초 2";
$article2["regDate"] = "2020-01-12 12:12:14";
$article2["writerName"] = "오정현";
$article2["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article2["tags"]=["CSS"];
$article2["body"] = <<<'EOT'
# 개요
- script 태그를 사용해야 한다.
- src 속성으로 외부 스크립트를 불러올 수 있다.
- defer 속성으로 html 엘리먼트 로딩까지 실행을 유보시킬 수 있다.
- 자식 컨텐츠로 자바스크립트를 넣어서 사용할 수 있다.
  
# 예시 - 자식 컨텐츠로 자바스크립트를 넣어서 사용
```html
<t-script>
var a = 10;
</t-script>
<div class="a"></div>
```
EOT;

// 게시물 1
$article1 = [];
$article1["id"] = 1;
$article1["title"] = "CSS기초 1";
$article1["regDate"] = "2020-01-12 12:12:14";
$article1["writerName"] = "오정현";
$article1["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article1["tags"]=["CSS"];
$article1["body"] = <<<'EOT'


# css 의미
## 개요
- Css는 웹문서에서 스타일을 담당하고 있습니다. 
- 미리 약속한 스타일 속성들을 통해 웹문서에 작성하면 이에 따라 웹문서가 디자인되어 화면에 표시됩니다. 
- 웹문서에서 스타일은 글꼴, 색상, 정렬, 배치 방법 등 여러가지가 있습니다. 겉모습을 결정시키는 요소입니다.


```html



```
EOT;

// 데이터 정리
$maxArticleId = getMaxArticleId();

$_allArticles = [];
$_tags = [];

for ( $i = $maxArticleId; $i > 0; $i-- ) {
    $varName = 'article' . $i;

    if ( isset($$varName) ) {
        $_allArticles[${$varName}['id']] = &$$varName;

        foreach ( $_allArticles[${$varName}['id']]['tags'] as $tag ) {
            $_tags[] = $tag;
        }
    }
}

$_tags = array_unique($_tags);
sort($_tags);

$_allArticlesByTag = [];

foreach ( $_tags as $tag ) {
    $_allArticlesByTag[$tag] = [];

    foreach ( $_allArticles as $article ) {
        if ( in_array($tag, $article['tags']) ) {
            $_allArticlesByTag[$tag][$article['id']] = $article;
        }
    }
}