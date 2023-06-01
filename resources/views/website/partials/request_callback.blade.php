<div class="callback-form" id="callback">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Request a <em>call back</em></h2>
                    <span>Looking for a prompt response? Let's chat now and get the answers you need!</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="contact-form">
                    <form action="{{ route('request.callback') }}" method="post" id="request-callback">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name"
                                        placeholder="Full Name">
                                    <p id="name-error" class="invalid-feedback"></p>
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email"
                                        pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address">
                                    <p id="email-error" class="invalid-feedback"></p>
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="phone" type="text" class="form-control" id="phone"
                                        placeholder="Phone No.">
                                    <p id="phone-error" class="invalid-feedback"></p>
                                </fieldset>

                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="subject" type="text" class="form-control" id="subject"
                                        placeholder="Subject">
                                    <p id="subject-error" class="invalid-feedback"></p>
                                </fieldset>

                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="your_message" rows="6" class="form-control" id="message" placeholder="Your Message"></textarea>
                                    <p id="your_message-error" class="invalid-feedback"></p>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="border-button">Send
                                        Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        $('#request-callback').submit(function(event) {
            event.preventDefault();

            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    toastr.success('Your message has been sent!');
                    $('#request-callback')[0].reset();
                    $('.is-invalid').removeClass('is-invalid');
                    $('.invalid-feedback').hide();
                },
                error: function(xhr, status, error) {
                    if (xhr.status == 422) {
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            $('#' + key + '-error').text(value[0]).show();
                            $('#' + key).addClass('is-invalid');
                        });
                    } else {
                        toastr.error('An error occurred: ' + error, 'Error', {
                            closeButton: true,
                            progressBar: true
                        });
                    }
                }
            });
        });
    });
</script>
