<?php


class PostBig
{
    public static function view($post, $urlPage, $left)
    {
        if ($left) {
            return '
                <div class="row post-big" data-scroll>
                    <div class="col-md-7">
                        <div class="content">
                            <p class="category">' . $post['NAME'] . '</p>
                            <h2 class="hv-l">
                                <a href="' . $urlPage . 'pages/detail.php?idPost=' . $post['ID_POST'] . '">
                                ' . $post['TITLE'] . '
                                </a>
                            </h2>
                            <p class="post-sapo">' . $post['SAPO'] . '</p>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <img src="' . $urlPage . 'public/images/' . $post['IMAGE1'] . '" class="img-post" alt="">
                        <ul class="bg-circle">
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>';
        } else {
            return '
                <div class="row post-big" data-scroll>
                    <div class="col-md-5">
                        <img src="' . $urlPage . 'public/images/' . $post['IMAGE1'] . '" class="img-post" alt="">
                        <ul class="bg-circle">
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <div class="content">
                            <p class="category">' . $post['NAME'] . '</p>
                            <h2 class="hv-l">
                                <a href="' . $urlPage . 'pages/detail.php?idPost=' . $post['ID_POST'] . '">
                                ' . $post['TITLE'] . '
                                </a>
                            </h2>
                            <p class="post-sapo">' . $post['SAPO'] . '</p>
                        </div>
                    </div>
                </div>';
        }
    }
}