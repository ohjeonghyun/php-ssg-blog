              
<?php
require_once "data.php";
require_once "head.php";
?>  
<!--메인 시작 -->
  <main>
    <section class="section-latest-articles con-min-width">
      <div class="con">
        <div class="article-list-box">
          <ul>
          <?php for ( $i = 5; $i >= 1; $i-- ) { ?>
        <?php
        $articleVarName = "article" . $i;
        $article = $$articleVarName;
        ?>
            <li>
            <h1 class="article-list-box__title"><a href="article_detail_<?=$article["id"]?>.ssghtml.php"><?=$article["title"]?></a></h1>
          <div class="article-list-box__reg-date"><?=$article["regDate"]?></div>
          <div class="article-list-box__writer">
            <span><?=$article3["writerName"]?></span>
            <span><?=$article3["writerAvatar"]?></span>
           
          </div>
              <div class="body">
                <script type="text/x-template">
# CSS 적용방법
## 개요
- Css 파일을 만드는 법은 htnl과 같이 단순히 확장자를 css로 지정하면 된다.
- 웹문서에 해당 css파일을 가져오고 싶은 경우 link 태그를 사용합니다. 
- 위 코드와 같이 경로와 타입, 스타일 시트임을 표시하면 웹문서에 바로 스타일을 적용할 수 있습니다.
```html


<link href="style_portal.css" rel="stylesheet" type="text/css">


```

# CSS 구성 요소

## 개요
- 스타일 형식은 위의 예시 코드와 같이 3가지 구성요소를 가지고 있습니다. 
- 선택자는 어떤 태그 혹은 아이디,클래스에 해당 스타일을 적용시킬지 지정합니다. 
- 스타일 속성은 미리 약속된 규약으로 어떤 스타일을 변경할 것인지를 결정합니다. 

```html

p {text-align: center; color: red;}


```

# 실습
```codepen
https://codepen.io/cuhjmuvf/embed/MWjPwbG?height=265&theme-id=light&default-tab=result" frameborder="no" loading="lazy" allowtransparency="true" allowfullscreen="true">
 
```
                </script>
                <div class="toast-ui-viewer"></div>
              </div>
            </li>
            <li>
            <h1 class="article-list-box__title"><a href="article_detail_<?=$article["id"]?>.ssghtml.php"><?=$article["title"]?></a></h1>
          <div class="article-list-box__reg-date"><?=$article["regDate"]?></div>
          <div class="article-list-box__writer">
            <span><?=$article3["writerName"]?></span>
            <span><?=$article3["writerAvatar"]?></span>
           
          </div>
              <div class="body">
                <script type="text/x-template">
# css 의미
## 개요
- Css는 웹문서에서 스타일을 담당하고 있습니다. 
- 미리 약속한 스타일 속성들을 통해 웹문서에 작성하면 이에 따라 웹문서가 디자인되어 화면에 표시됩니다. 
- 웹문서에서 스타일은 글꼴, 색상, 정렬, 배치 방법 등 여러가지가 있습니다. 겉모습을 결정시키는 요소입니다.


```html



```
  
  <h1> vlog </h1>
             
  
```youtube
uBfr_oQvxys
```
                </script>
                <script type="text/x-template"><?=$article['body']?></script>
                <div class="toast-ui-viewer"></div>
              </div>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </section>
  </main>

        <?php
require_once "foot.php";
?>