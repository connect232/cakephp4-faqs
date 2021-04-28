<?php
    if (isset($category->faqs) && count($category->faqs)) :
?>
    <div class="container mb-5">
        <h3>Frequently Asked <?= $category->name ?> Questions</h3>
        <div id="files-accordion" class="accordion" itemscope itemtype="https://schema.org/FAQPage">
            <?php foreach ($category->faqs as $index => $faq) : ?>
                <span itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button
                        class="d-flex align-items-center justify-content-between mt-2 btn w-100 accordion-border collapsed"
                        data-toggle="collapse"
                        data-target="#faq<?= $index ?>"
                        aria-expanded="false"
                    >
                        <h2 itemprop="name"><?= $faq->question ?></h2>
                        <span class="fa-stack fa-sm">
                            <i class="fas fa-circle fa-stack-2x fa-inverse"></i>
                            <i class="fas fa-plus fa-stack-1x"></i>
                        </span>
                    </button>
                    <div id="faq<?= $index ?>" class="border collapse" data-parent="#files-accordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div class="p-3">
                            <p itemprop="text"><?= $faq->answer ?></p>
                        </div>
                    </div>
                </span>
            <?php endforeach ?>
        </div>
    </div>
<?php endif ?>
