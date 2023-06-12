<section class="contact">
<div class="container-xl py-5">
    <h2 class="text-center pb-4">Contact us</h2>
    <div class="row">
        <div class="col-lg-6">
            <iframe class="mb-4" src="<?=get_field('gatwick_map_embed','options')?>" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <div class="h3">London Gatwick Office</div>
            <div class="py-2"><?=get_field('gatwick_address','options')?></div>
            <div class="py-2">Enquiries: <a href="mailto:<?=get_field('contact_email','options')?>"><?=get_field('contact_email','options')?></a></div>
            <div class="py-2">
            Tel: <a href="tel:<?=parse_phone(get_field('gatwick_phone','options'))?>"><?=get_field('gatwick_phone','options')?></a>
            <br/>Fax: <?=get_field('gatwick_fax','options')?>
            </div>
            <div class="py-2">
            <i class="fas fa-map-marker-alt"></i> <a href="<?=get_field('gatwick_directions_url','options')?>" target="_blank">Get directions</a>
            </div>
        </div>
        <div class="col-lg-6">
            <iframe class="mb-4" src="<?=get_field('heathrow_map_embed','options')?>" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <div class="h3">London Heathrow Office</div>
            <div class="py-2"><?=get_field('heathrow_address','options')?></div>
            <div class="py-2">Enquiries: <a href="mailto:<?=get_field('contact_email','options')?>"><?=get_field('contact_email','options')?></a></div>
            <div class="py-2">
            Tel: <a href="tel:<?=parse_phone(get_field('heathrow_phone','options'))?>"><?=get_field('heathrow_phone','options')?></a>
            <br/>Fax: <?=get_field('heathrow_fax','options')?>
            </div>
            <div class="py-2">
            <i class="fas fa-map-marker-alt"></i> <a href="<?=get_field('heathrow_directions_url','options')?>" target="_blank">Get directions</a>
            </div>
        </div>
    </div>
</div>
</section>


