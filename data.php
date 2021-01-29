<?php
require_once "util.php";
require_once "app.php";

$siteTitle = "디자이너 오정현";
$siteDescription = "디자이너  오정현 기술 블로그";
$siteKeywordsStr = "CSS, HTML, JS";
$siteName = "DESIGN Jasmin";
$siteThumbUrl = "https://i.postimg.cc/mDPYzmdJ/image.jpg";

// 태그정보 시작
$tagInfos = [
    "js" => [
        //"pageThumbUrl" => "자바스크립트 관련 글 전용 이미지"
        //"pageDescription" => "2021년 특별기획, 자바스크립트 관련 강좌 입니다."
    ],
    "CSS" => [
        "pageThumbUrl" => "https://i.postimg.cc/XNt9zMLz/css-logo.jpg"
    ]
];
// 태그정보 끝


// 태그정보 끝



// 게시물 7

$article7 = [];
$article7["id"] = 7;
$article7["title"] = "CSS  배경";
$article7["regDate"] = "2020-01-29 14:43:15";
$article7["writerName"] = "오정현";
$article7["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article7["tags"]= ["CSS"]; 
$article7["body"] = <<<'EOT'
# 개요

CSS에서 사용할 수 있는 대표적인 text 속성은 다음과 같습니다.

 

1. color

2. direction

3. letter-spacing

4. word-spacing

5. text-indent

6. text-align

7. text-decoration

8. text-transform

9. line-height

10. text-shadow

color-	텍스트의 색상을 설정함.
direction-	텍스트가 쓰이는 방향을 설정함.
letter-spacing-	텍스트 내에서 문자 사이의 간격을 설정함.
word-spacing-	텍스트 내에서 단어 사이의 간격을 설정함.
text-indent-	단락의 첫 줄을 들여쓰기할지 안 할지를 설정함.
text-align-	텍스트의 수평 방향 정렬을 설정함.
text-decoration-	텍스트에 여러 가지 효과를 설정하거나 제거함.
text-transform-	텍스트에 포함된 영문자에 대한 대소문자를 설정함.
line-height-	텍스트의 줄 간격을 설정함.
text-shadow-	텍스트에 그림자 효과를 설정함.
unicode-bidi-	direction 속성과 같이 사용하여 텍스트의 기본 출력 방향을 설정함.
vertical-align-	HTML 요소 내의 수직 방향 정렬을 설정함.
white-space-	HTML 요소 내의 여백을 설정함.



```

EOT;

// 게시물 6

$article6 = [];
$article6["id"] = 6;
$article6["title"] = "CSS  배경";
$article6["regDate"] = "2020-01-28 00:06:15";
$article6["writerName"] = "오정현";
$article6["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article6["tags"]= ["CSS"]; 
$article6["body"] = <<<'EOT'
# 개요

CSS에서 사용할 수 있는 background 속성은 다음과 같습니다.

 

1. background-color

2. background-image

3. background-repeat

4. background-position

5. background-attachment



background	- 모든 background 속성을 이용한 스타일을 한 줄에 설정할 수 있음.
background-color -	HTML 요소의 배경색을 설정함.
background-image -	HTML 요소의 배경 이미지를 설정함.
background-repeat -	설정된 배경 이미지의 반복 유무를 설정함.
background-position -	반복되지 않는 배경 이미지의 상대 위치를 설정함.
background-attachment -	배경 이미지를 스크롤과는 무관하게 해당 위치에 고정시킴.



```

EOT;




// 게시물 5

$article5 = [];
$article5["id"] = 5;
$article5["title"] = "CSS  색";
$article5["regDate"] = "2020-01-21 17:28:15";
$article5["writerName"] = "오정현";
$article5["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article5["tags"]= ["CSS"]; 
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
$article4["tags"]= ["CSS"];
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
$article3["tags"]= ["CSS"];
$article3["body"] = <<<'EOT'
# 개요
# CSS 적용방법
## 개요
- Css 파일을 만드는 법은 htnl과 같이 단순히 확장자를 css로 지정하면 된다.
- 웹문서에 해당 css파일을 가져오고 싶은 경우 link 태그를 사용합니다. 
- 위 코드와 같이 경로와 타입, 스타일 시트임을 표시하면 웹문서에 바로 스타일을 적용할 수 있습니다.



EOT;

// 게시물 2
$article2 = [];
$article2["id"] = 2;
$article2["title"] = "CSS 기초 2";
$article2["regDate"] = "2020-01-12 12:12:14";
$article2["writerName"] = "오정현";
$article2["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article2["tags"]= ["CSS"];
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