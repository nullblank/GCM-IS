<input type='hidden' name='s_id' value='32644170'/>
<div class="">
    <section class="py-24 bg-coolGray-900" style="background-image: url('<?php echo base_url(); ?><flex-ui-assets/elements/pattern-dark2.svg'); background-position: center;">
        <div class="container px-4 mx-auto">
            <div class="max-w-4xl mx-auto mb-12 text-center">

                <h3 class="mb-4 text-3xl md:text-4xl leading-tight text-white font-bold tracking-tighter">Welcome <?php echo $student->s_first; ?>, <?php echo $student->s_last; ?>!  [Debug ID:<?php echo $stud_id; ?>]</h3>
                <p class="text-lg md:text-xl text-coolGray-400 font-medium">In order for the Guidance and Testing Office to properly help and guide you, you need to fill out the following so we can get to know you better. The more we know about you, the more we can help you grow as an individual.</p>
            </div>
            <div class="max-w-3xl mx-auto">
                <!-- Educational Background -->
                <?php $this->load->view($button_1); ?>
                <!-- Home and Family Background -->
                <?php $this->load->view($button_2); ?>
                <!-- Medical History -->
                <?php $this->load->view($button_3); ?>
                <!-- Mental Health Checklist -->
                <?php $this->load->view($button_4); ?>
                <!-- Short Self Positive Survey -->
                <?php $this->load->view($button_5); ?>

            </div>
            
        </div>
    </section>
    <p class="text-lg md:text-xl text-coolGray-400 font-medium">For any corrections on the information you have provided, please come to the guidance office for your concern.</p>
</div>
</form>