<?php get_header();
global $wesoftpress; ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<main class='main clear'>
    <div class='main-box clear'>
        <h1 class='story-title'><a
                href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <div class='main-left-right clear'>
            <div class='left-box'>
                <div class='content section' id='content'>
                    <div class='widget Blog' data-version='1' id='Blog1'>
                        <div class='blog-posts clear'>
                            <div class='post'>
                                <div class='post-body' itemscope='' itemtype='https://schema.org/NewsArticle'>
                                    <link
                                        href="https://thehackernews.com/2022/10/researchers-claim-microsoft-office-365.html"
                                        itemprop='mainEntityOfPage url' />
                                    <meta
                                        content='Researchers Say Microsoft Office 365 Uses Broken Email Encryption to Secure Messages'
                                        itemprop='headline' />
                                    <meta content='en-US' itemprop='inLanguage' />
                                    <meta content='2022-10-17T16:03:00+05:30' itemprop='datePublished' />
                                    <meta content='2022-10-17T12:39:27Z' itemprop='dateModified' />
                                    <div itemprop='image' itemscope='' itemtype='https://schema.org/ImageObject'>
                                        <meta
                                            content='https://thehackernews.com/new-images/img/b/R29vZ2xl/AVvXsEh_w3nbJTFOqsK2RHm5cSJyf3QQjXne8E1kuRL7HaCED20pfpV6CQM5lrf7vD-qJiJ7-FTAkvko33UU3pnWpX4c-TCJyTzy36hHjPmh5CYWkpIpSH5OepCVmIwx5Df0tVOR7an34dFY-VKjJyk1WBHCZ3JSdR4YGO3fHXV9E-9oNT112liEei5slOnT/s728-e100/crypto.jpg'
                                            itemprop='url' />
                                        <meta content='728' itemprop='width' />
                                        <meta content='380' itemprop='height' />
                                    </div>
                                    <div itemprop='publisher' itemscope='' itemtype='https://schema.org/Organization'>
                                        <meta content='The Hacker News' itemprop='name' />
                                        <meta content='https://thehackernews.com/' itemprop='url' />
                                        <div content='https://thehackernews.com/images/-lr1jzOJlY3g/Wzjug8yO0UI/AAAAAAAAxSk/pVpxFhgIHRcIbASdYo3YSDZLB8p3ytjqACLcBGAs/s460/the-hacker-news.jpg'
                                            itemprop='logo' itemscope='' itemtype='https://schema.org/ImageObject'>
                                            <meta
                                                content='https://thehackernews.com/images/-lr1jzOJlY3g/Wzjug8yO0UI/AAAAAAAAxSk/pVpxFhgIHRcIbASdYo3YSDZLB8p3ytjqACLcBGAs/s460-e100/the-hacker-news.jpg'
                                                itemprop='url' />
                                            <meta content='460' itemprop='width' />
                                            <meta content='60' itemprop='height' />
                                        </div>
                                    </div>
                                    <div itemprop='author' itemscope='' itemtype='https://schema.org/Person'>
                                        <meta content='Ravie Lakshmanan' itemprop='name' />
                                    </div>
                                    <div class='clear post-head'>
                                        <div class='postmeta'><i class='icon-font icon-calendar'>&#59394;</i><span
                                                class='author'>October 17, 2022</span><i
                                                class='icon-font icon-user'>&#59396;</i><span class='author'><a
                                                    href='/p/authors.html' rel='author'>Ravie Lakshmanan</a></span>
                                        </div>
                                    </div>
                                    <div class='articlebody clear cf' id='articlebody'>
                                        <div class="separator" style="clear: both;"><a
                                                href="https://thehackernews.com/new-images/img/b/R29vZ2xl/AVvXsEh_w3nbJTFOqsK2RHm5cSJyf3QQjXne8E1kuRL7HaCED20pfpV6CQM5lrf7vD-qJiJ7-FTAkvko33UU3pnWpX4c-TCJyTzy36hHjPmh5CYWkpIpSH5OepCVmIwx5Df0tVOR7an34dFY-VKjJyk1WBHCZ3JSdR4YGO3fHXV9E-9oNT112liEei5slOnT/s728-e100/crypto.jpg"
                                                style="display: block;  text-align: center; clear: left; float: left;"><img
                                                    alt="" border="0" data-original-height="380"
                                                    data-original-width="728"
                                                    src="https://thehackernews.com/new-images/img/b/R29vZ2xl/AVvXsEh_w3nbJTFOqsK2RHm5cSJyf3QQjXne8E1kuRL7HaCED20pfpV6CQM5lrf7vD-qJiJ7-FTAkvko33UU3pnWpX4c-TCJyTzy36hHjPmh5CYWkpIpSH5OepCVmIwx5Df0tVOR7an34dFY-VKjJyk1WBHCZ3JSdR4YGO3fHXV9E-9oNT112liEei5slOnT/s728-e100/crypto.jpg" /></a>
                                        </div>
                                        <p>New research has disclosed what's being called a security vulnerability in
                                            Microsoft 365 that could be exploited to infer message contents due to the
                                            use of a broken cryptographic algorithm.</p>
                                        <p>"The [Office 365 Message Encryption] messages are encrypted in insecure
                                            Electronic Codebook (<a
                                                href="https://en.wikipedia.org/wiki/Block_cipher_mode_of_operation#Electronic_codebook_(ECB)"
                                                rel="noopener" target="_blank">ECB</a>) mode of operation," Finnish
                                            cybersecurity company WithSecure <a
                                                href="https://labs.withsecure.com/advisories/microsoft-office-365-message-encryption-insecure-mode-of-operation"
                                                rel="noopener" target="_blank">said</a> in a report published last week.
                                        </p>
                                        <p>Office 365 Message Encryption (OME) is a security mechanism used to send and
                                            receive encrypted email messages between users inside and outside an
                                            organization without revealing anything about the communications themselves.
                                        </p>
                                        <div class='ad_two clear'>
                                            <center class='cf'><a href='https://go.thn.li/strike-d'
                                                    rel='nofollow noopener sponsored' target='_blank'
                                                    title='DevOps backupy'><img decoding='async' alt='CyberSecurity'
                                                        class='lazyload' loading='lazy'
                                                        data-src='https://thehackernews.com/new-images/img/b/R29vZ2xl/AVvXsEgvfqow2z1XORevUpzKGWWXZ2DP4dMaNi-7cycpa3J_bSZKv0tO6MP40HLl7lvVJDIswOmb6I-YoNMLJym4v9oLZQczujsMqcttB3M_Cvm6E-zLs0XrpwaTZ_SGFjckDfi3CPfijZaii8Z88_btcKeHKKfxm7cDyF3kaVvsirGpb2JWVH0Ot3xGiC2sZg/s1600/strike-728.png'
                                                        src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAAD6AQMAAAAho+iwAAAAA1BMVEXm5+i1+56pAAAAH0lEQVQYGe3AAQ0AAADCIPuntscHAwAAAAAAAAAAIOQmFgAB/YLDRAAAAABJRU5ErkJggg=='
                                                        width='300' height='250' /></a></center>
                                        </div>
                                        <p>A consequence of the newly disclosed issue is that rogue third-parties
                                            gaining access to the encrypted email messages may be able to decipher the
                                            messages, effectively breaking confidentiality protections.</p>
                                        <p>Electronic Codebook is one of the simplest modes of encryption wherein each
                                            message block is encoded separately by a key, meaning identical plaintext
                                            blocks will be transposed into identical ciphertext blocks, making it <a
                                                href="https://nvd.nist.gov/vuln/detail/CVE-2020-11500" rel="noopener"
                                                target="_blank">unsuitable</a> as a cryptographic protocol.</p>
                                        <p>Indeed, the U.S. National Institute of Standards and Technology (NIST) <a
                                                href="https://csrc.nist.gov/News/2022/proposal-to-revise-sp-800-38a"
                                                rel="noopener" target="_blank">pointed out</a> earlier this year that
                                            "ECB mode encrypts plaintext blocks independently, without randomization;
                                            therefore, the inspection of any two ciphertext blocks reveals whether or
                                            not the corresponding plaintext blocks are equal."</p>
                                        <p>That said, the shortcoming identified by WithSecure doesn't relate to the
                                            decryption of a single message per se, but rather banks on analyzing a stash
                                            of encrypted stolen mails for such leaky patterns and subsequently decoding
                                            the contents.</p>
                                        <p>"An attacker with a large database of messages may infer their content (or
                                            parts of it) by analyzing relative locations of repeated sections of the
                                            intercepted messages," the company said.</p>
                                        <p>The findings add to growing concerns that encrypted information previously
                                            exfiltrated may be decrypted and exploited for attacks in the future, a
                                            threat called "hack now, decrypt later," fueling the need to switch to <a
                                                href="https://thehackernews.com/2022/07/nist-announces-first-four-quantum.html"
                                                rel="noopener" target="_blank">quantum-resistant algorithms</a>. </p>
                                        <div class='ad_two clear'>
                                            <center class='cf'><a href='https://go.thn.li/crowd-mid-d'
                                                    rel='nofollow noopener sponsored' target='_blank'
                                                    title='CyberSecurity'><img decoding='async' alt='CyberSecurity'
                                                        class='lazyload' loading='lazy'
                                                        data-src='https://thehackernews.com/new-images/img/b/R29vZ2xl/AVvXsEglTybVbyQ3y6xCIxW9BIpqhgWBf_IhNgCo44HrgwUeYVi_GwvasznH93LLdkqJLwdp4DUkFkILg6m3WDgkue7MFxmbzFxmTBe7-pukEjyvUZ3j9yGyBcL2yUAZVFSQkjSric7YYfU8WgwHwYsS2-3wZ1zLQDAqgkoEpk5kZsbUuyh0UlV8nq7PplYEgQ/s1600/banners-crowdsec-728.png'
                                                        src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAAD6AQMAAAAho+iwAAAAA1BMVEXm5+i1+56pAAAAH0lEQVQYGe3AAQ0AAADCIPuntscHAwAAAAAAAAAAIOQmFgAB/YLDRAAAAABJRU5ErkJggg=='
                                                        width='728' height='90' /></a></center>
                                        </div>
                                        <p>Microsoft, for its part, considers OME as a <a
                                                href="https://learn.microsoft.com/en-us/microsoft-365/compliance/legacy-information-for-message-encryption"
                                                rel="noopener" target="_blank">legacy system</a>, with the company <a
                                                href="https://learn.microsoft.com/en-us/microsoft-365/compliance/ome-faq"
                                                rel="noopener" target="_blank">recommending customers</a> to use a data
                                            governance platform called <a
                                                href="https://learn.microsoft.com/en-us/azure/purview/" rel="noopener"
                                                target="_blank">Purview</a> to secure emails and documents via
                                            encryption and access controls.</p>
                                        <p>"Even though both versions can coexist, we highly recommend that you edit
                                            your old mail flow rules that use the rule action Apply the previous version
                                            of OME to use Microsoft Purview Message Encryption," Redmond <a
                                                href="https://learn.microsoft.com/en-us/microsoft-365/compliance/ome-version-comparison"
                                                rel="noopener" target="_blank">notes</a> in its documentation.</p>
                                        <p>"Since Microsoft has no plans to fix this vulnerability the only mitigation
                                            is to avoid using Microsoft Office 365 Message Encryption," WithSecure said.
                                        </p>
                                        <br />
                                        <div class='stophere'></div>
                                        <div class='cf note-b'>Found this article interesting? Follow THN on <a
                                                href='https://www.facebook.com/thehackernews' rel='noopener'
                                                target='_blank'>Facebook</a>, <a
                                                href='https://twitter.com/thehackersnews' rel='noopener'
                                                target='_blank'>Twitter <i
                                                    class='icon-font icon-twitter'>&#61593;</i></a> and <a
                                                href='https://www.linkedin.com/company/thehackernews/' rel='noopener'
                                                target='_blank'>LinkedIn</a> to read more exclusive content we post.
                                        </div>
                                    </div>
                                    <script data-cfasync='false'>
                                        var share_url = encodeURIComponent(
                                            'https://thehackernews.com/2022/10/researchers-claim-microsoft-office-365.html'
                                        );
                                        var share_title = document.getElementsByTagName("title")[0].innerHTML;
                                        share_title = encodeURIComponent(share_title);
                                    </script>
                                    <meta content='4802841478634147276' name='blogId' />
                                    <meta content='6244586426893951967' name='postId' />
                                    <div class='schema_org'></div>
                                    <div class='float-share cf'>
                                        <span class='fs-note'>SHARE</span>
                                        <a class='float-share-li fs-fb' data-sm='facebook' href='#link_share'
                                            rel='nofollow noopener' target='_blank'><i
                                                class='icon-font icon-facebook'>&#61594;</i></a>
                                        <a class='float-share-li fs-tw' data-sm='twitter' href='#link_share'
                                            rel='nofollow noopener' target='_blank'><i
                                                class='icon-font icon-twitter'>&#61593;</i></a>
                                        <a class='float-share-li fs-ln' data-sm='linkedin' href='#link_share'
                                            rel='nofollow noopener' target='_blank'><i
                                                class='icon-font icon-linkedin'>&#61665;</i></a>
                                        <a class='float-share-li fs-more' href='javascript:void(0)'><i
                                                class='icon-font icon-share'>&#61920;</i></a>
                                        <a class='float-share-li fs-com show-comments' href='#comment-box'><i
                                                class='icon-font icon-comment'>&#59395;</i></a>
                                    </div>
                                    <div class='sharebelow clear'>
                                        <div class='sharebelow-facebook'><a data-sm='facebook' href='#link_share'
                                                rel='nofollow noopener' target='_blank'><span><i
                                                        class='icon-font icon-facebook'>&#61594;</i>Share</span></a>
                                        </div>
                                        <div class='sharebelow-twitter'><a data-sm='twitter' href='#link_share'
                                                rel='nofollow noopener' target='_blank'><span><i
                                                        class='icon-font icon-twitter'>&#61593;</i>Tweet</span></a>
                                        </div>
                                        <div class='sharebelow-linkedin'><a data-sm='linkedin' href='#link_share'
                                                rel='nofollow noopener' target='_blank'><span><i
                                                        class='icon-font icon-linkedin'>&#61665;</i>Share</span></a>
                                        </div>
                                        <div class='share-show-modal share-open-modal'><span><i
                                                    class='icon-font icon-share'>&#61920;</i>Share</span></div>
                                        <aside class='share-modal'>
                                            <aside class='share-m-wrap'><a class='share-close-modal'
                                                    href='javascript:void(0)'><i
                                                        class='icon-font icon-cancel'>&#59402;</i></a>
                                                <a class='more-share m-fb' data-sm='facebook' href='#link_share'
                                                    rel='nofollow noopener' target='_blank'><i
                                                        class='icon-font icon-facebook'>&#61594;</i>Share on
                                                    Facebook</a>
                                                <a class='more-share m-tw' data-sm='twitter' href='#link_share'
                                                    rel='nofollow noopener' target='_blank'><i
                                                        class='icon-font icon-twitter'>&#61593;</i>Share on Twitter</a>
                                                <a class='more-share m-ln' data-sm='linkedin' href='#link_share'
                                                    rel='nofollow noopener' target='_blank'><i
                                                        class='icon-font icon-linkedin'>&#61665;</i>Share on
                                                    Linkedin</a>
                                                <a class='more-share m-rd' data-sm='reddit' href='#link_share'
                                                    rel='nofollow noopener' target='_blank'><i
                                                        class='icon-font icon-reddit-alien'>&#62081;</i>Share on
                                                    Reddit</a>
                                                <a class='more-share m-hn' data-sm='hackernews' href='#link_share'
                                                    rel='nofollow noopener' target='_blank'><i
                                                        class='icon-font icon-hacker-news'>&#61908;</i>Share on Hacker
                                                    News</a>
                                                <a class='more-share m-em' data-sm='email' href='#link_share'
                                                    rel='nofollow noopener' target='_blank'><i
                                                        class='icon-font icon-mail-alt'>&#61664;</i>Share on Email</a>
                                                <a class='more-share m-wa' data-sm='whatsapp' href='#link_share'
                                                    rel='nofollow noopener' target='_blank'><i
                                                        class='icon-font icon-whatsapp'>&#62002;</i>Share on
                                                    WhatsApp</a>
                                                <a class='more-share m-fm' data-sm='facebook-m' href='#link_share'
                                                    rel='nofollow noopener' target='_blank'><img
                                                        alt='Facebook Messenger' decoding='async' loading='lazy'
                                                        src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAMAAADW3miqAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAG9QTFRF////z+j/1+z//P7/AIT/0en/2u3/0+r/6PT/+Pz/3/D/4PD/0Oj/5PL/R6b/1Or/9/v/D4v/u97/mM7/lMz/4/L/7/f/CIj/xOP/K5n/6/X/7fb/str/h8X/8Pj/ntD/8vn/YbP/pdT/XLD/////yeSxCQAAACV0Uk5T////////////////////////////////////////////////AD/PQk8AAACwSURBVHja7NPHDoMwDAbg3xkkzEKhe9DB+z9jBWlpIzmoqtQbPuSST3FsJ+i+CMzoJxSRMRRNIooxRExhlGCMJIRWAK8+EMELYpH0Ucwh4faW9bBaQDDIZdtuVAtdHL18b5T1RleVUoW6IYD6k8SuKa9K1QihFLDNGZD3k7tdylV3gKvvWeWebYHwWxDxHc8CvfRnp0ciKTjgxYuYdTeBdJkLkU8+OnuZ/93f0UOAAQDpgJe+d1P0RQAAAABJRU5ErkJggg==' />Share
                                                    on Facebook Messenger</a>
                                                <a class='more-share m-tg' data-sm='telegram' href='#link_share'
                                                    rel='nofollow noopener' target='_blank'><i
                                                        class='icon-font icon-telegram'>&#62150;</i>Share on
                                                    Telegram</a>
                                            </aside>
                                        </aside>
                                        <div class='sharebelow-comment'><a class='show-comments' href='#comment-box'><i
                                                    class='icon-font icon-comment'>&#59395;</i>Comments</a></div>
                                    </div>
                                    <div class='mobile-share' id='mobile-share'><a
                                            class='float-share-li fs-more mobile-s' href='javascript:void(0)'>SHARE <i
                                                class='icon-font icon-share'>&#61920;</i></a></div>
                                    <div class='tags'><span class='categ' itemprop='keywords'><a
                                                href="https://thehackernews.com/search/label/encryption" rel='tag'><span
                                                    itemprop='articleSection'>encryption</span></a>, <a
                                                href="https://thehackernews.com/search/label/hacking%20news"
                                                rel='tag'><span itemprop='articleSection'>hacking news</span></a>, <a
                                                href="https://thehackernews.com/search/label/Microsoft%20365"
                                                rel='tag'><span itemprop='articleSection'>Microsoft 365</span></a>, <a
                                                href="https://thehackernews.com/search/label/Vulnerability"
                                                rel='tag'><span
                                                    itemprop='articleSection'>Vulnerability</span></a></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php get_sidebar(); ?>
            
        </div>
        <div class='comments cf'>
            <div class='comment-box cf' id='comment-box'>
                <div class='latest-title cf'>Comments</div>
                <div id='fb-root'></div>
                <div class='fb-comments'
                    data-href='https://thehackernews.com/2022/10/researchers-claim-microsoft-office-365.html'
                    data-numposts='10' data-width='100%'></div>
            </div>
        </div>
    </div>
</main>
<?php endwhile; ?>
<?php else :
    echo '<h2 style="text-align:center; font-size:2rem; margin:20px 0; font-weight:normal;">Nothing hare</h2>';
endif; ?>
<div class='google cf below-google'>
    <center class='cf'>
        <div class='clear' id='av-bottom-d'></div><ins class='adsbygoogle header_unit'
            data-ad-client='ca-pub-7983783048239650' data-ad-slot='8972781702' style='display:inline-block' />
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </center>
</div>
<google-related></google-related>
<div class='below-post cf'>
    <div class='below-post-box cf'>
        <div id='load-latest'>
            <div class='latest-title cf'>Latest Stories</div>
            <div class='cf' id='result'>
                <?php
                $args = array('posts_per_page' => 4, 'order' => 'DESC',);
                $lastpost = new WP_Query($args);
                if ($lastpost->have_posts()) : while ($lastpost->have_posts()) : $lastpost->the_post();
                get_template_part('template-parts/content/content-box');
                endwhile;
                wp_reset_postdata();
                else :
                    echo '<P>no posts found</P>';
                endif; ?>
            </div>
        </div>
    </div>
</div>
<div class='below-post cf'>
    <div class='below-post-box cf'>
        <div class='latest-title cf'>Other Stories</div>
        <div id='load-latest-2'>
            <?php
            $args = array('posts_per_page' => 4, 'orderby' => 'rand',);
            $lastpost = new WP_Query($args);
            if ($lastpost->have_posts()) : while ($lastpost->have_posts()) : $lastpost->the_post();
            get_template_part('template-parts/content/content-box');
            endwhile;
            wp_reset_postdata();
            else :
                echo '<P>no posts found</P>';
            endif; ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>