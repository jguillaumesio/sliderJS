<?php
$width="650px";
$height="308px";
?>
<div id="viewer" onmouseover="stopSlide();" onmouseout="autoSlide();">
    <div class="btn" id="next" onClick="next(this.id);stopSlide();" style="visibility:visible;">&#8250;</div>
<div id="complete">
    <figure><img src="assets/img/1.png" alt="" height="<?= $height; ?>" width="<?= $width; ?>"><figcaption> Ut molh4. Nam bibendum, lectus sed imperdiet volutpat, libero tortor suscipit nibh, et scelerisque orci turpis sit amet enim.</figcaption></figure>
    <figure><img src="assets/img/2.png" alt="" height="<?= $height; ?>" width="<?= $width; ?>"><figcaption>Duis vulputate ac velit at elementum. Donec enim orci, vestibulum et quam non, efficitur pulvinar lectus.Nullam laoreet quam eu dictum lacinia.</figcaption></figure>
    <figure><img src="assets/img/3.png" alt="" height="<?= $height; ?>" width="<?= $width; ?>"><figcaption>Lorem ipsum dolor sit amet, vestibulum et quam non, efficitur pulvinar lectus.</figcaption></figure>
    <figure><img src="assets/img/4.png" alt="" height="<?= $height; ?>" width="<?= $width; ?>"><figcaption>Lorem ipsum dolor sit amet lectus.</figcaption></figure>
    <figure><img src="assets/img/5.png" alt="" height="<?= $height; ?>" width="<?= $width; ?>"><figcaption> pulvinar lectus. Vestibulum a tortor.</figcaption></figure>
</div>
    <div class="btn" id="previous" onClick="previous(this.id);stopSlide();" style="visibility:visible;">&#8249;</div>
</div>

