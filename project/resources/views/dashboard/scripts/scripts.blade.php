<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript">
    $('.enter').click(function(){
        $(".popup").fadeIn();
    });
    $('.enter-update').click(function(){
         $(".user-data-popup").fadeIn();
    });
    $('.exit').click(function(){
        $('.popup').fadeOut();
    });
    $('.exit').click(function(){
        $('.user-data-popup').fadeOut();
    });
    $(function() {
        $(window).scroll(function() {
            if($(this).scrollTop() != 0) {
                $('#toTop').fadeIn();
            } else {
                $('#toTop').fadeOut();
            }
        });
        $('#toTop').click(function() {
            $('body,html').animate({scrollTop:0},800);
        });
    });


    // $(function () {
    //     $('.edit-button').click(function (e) {
    //         var parent = $(this).parent('.enter-update');
    //         $('.qw').val(+parent.data('id'));
    //     });
    // });

</script>
@if($errors->add->all())
    <script>
        $('.enter').click();
    </script>
    @endif
@if($errors->update->all())
    <script>
        $('.enter-update').click();
    </script>
@endif

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
    $(function () {
        $('.edit-contact').on('click', function (e) {
            e.preventDefault()
            var url = $(this).attr("data-url")
            $.ajax({
                url: url,
                success: function (result) {
                    console.log(result)
                    console.log(result.contact.sex)
                    let popup = $('.edit-popup')
                    popup.find('input[name="id"]').val(result.contact.id)
                    popup.find('input[name="name"]').val(result.contact.name)
                    popup.find('input[name="email"]').val(result.contact.email)
                    popup.find('input[name="last_name"]').val(result.contact.last_name)
                    popup.find('input[name="phone"]').val(result.contact.phone)
                    popup.find('input[name="address"]').val(result.contact.address)
                    popup.find('input[name="birthday"]').val(result.contact.birthday)
                    // popup.find('input[name="photo"]').val(result.contact.photo)
                    popup.find('input[name="death"]').val(result.contact.death)
                    popup.find('input[name="parent_id"]').val(result.contact.parent_id)
                    if (result.contact.sex == 'male')
                    {
                        $( ".male").prop('checked', true);
                    }
                    else
                    {
                        $( ".female").prop('checked', true);
                    }
                    if (result.contact.parent_id != null)
                    {
                        $.each(result, function(key, value) {
                            $('#parent_id').append('<option selected value="'+ result.contact.parent_id + '">'+ result.contact.parent_id +'</option>');
                        // $( ".parent_id").prop('selected', true);
                        });
                    }
                    else
                    {
                        $( ".parent_id").prop('selected', false);
                    }

                },err: function (err) {
                    console.log(err)
                }
            });




        })
    });
</script>
{{--Скрипт для появления фото в попапе при загрузке--}}
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#image').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imgInput").change(function(){
        readURL(this);
    });
</script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imageUpdate').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imgInputUpdate").change(function(){
        readURL(this);
    });
</script>