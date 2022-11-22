<section class="relative py-24 md:py-44 lg:py-64 bg-coolGray-50" style="background-image: url('flex-ui-assets/elements/pattern-light-big.svg'); background-position: center;">
    <div class="relative z-10 container px-4 mx-auto">
        <div class="max-w-4xl mx-auto text-center">
            <span class="inline-block py-px px-2 mb-4 text-xs leading-5 text-green-500 bg-green-100 font-medium rounded-full shadow-sm">Error 404</span>
            <h2 class="mb-4 text-4xl md:text-5xl leading-tight font-bold tracking-tighter"><?php echo $student->s_first; ?> has not made an attempt to fill out this form.</h2>
            <p class="mb-12 text-lg md:text-xl text-coolGray-500">
                You can try reaching <?php echo $student->s_first; ?> via their email: <?php echo $student->s_email; ?> or schedule a counseling session to verify their information in-person.
            </p>
        </div>
    </div>
</section>