@extends('website.layout.app')
@section('title', 'Term')
@section('content')
<div class="contain">

    <div class="sec-1 ">
        <!-- <img loading="lazy" alt="" src="./assets/imgs/mov3.gif" /> -->
        <div class="sec1-content">
            <h5>Success Stories</h5>
        </div>
    </div>

    <div class="success-stories">

        <div class="success-circles" id="imageContainer">

            <div class="circle2 fl">
                <div class="circle-content2">
                    <h5>Cryptocurrency</h5>
                    <p class="d-n2">circle 1 Multicultural & Multilanguage Team</p>
                </div>
            </div>
            <div class="circle2 fl">
                <div class="circle-content2">
                    <h5>Banking / Insurance</h5>
                    <p class="d-n2">circle 2 circle 1 Multicultural & Multilanguage Team</p>
                </div>
            </div>
            <div class="circle2 fl">
                <div class="circle-content2">
                    <h5>Education</h5>
                    <p class="d-n2">circle 3 circle 1 Multicultural & Multilanguage Team</p>
                </div>
            </div>
            <div class="circle2 fl">
                <div class="circle-content2">
                    <h5>Fashion</h5>
                    <p class="d-n2">circle 4 circle 1 Multicultural & Multilanguage Team</p>
                </div>
            </div>
            <div class="circle2 fl">
                <div class="circle-content2">
                    <h5>Airlines</h5>
                    <p class="d-n2">circle 5 circle 1 Multicultural & Multilanguage Team</p>
                </div>
            </div>
            <div class="circle2 fl">
                <div class="circle-content2">
                    <h5>Mass Retail</h5>
                    <p class="d-n2">circle 6 circle 1 Multicultural & Multilanguage Team </p>
                </div>
            </div>
            <div class="circle2 fl hidd">
                <div class="circle-content2">
                    <h5>Cryptocurrency</h5>
                    <p class="d-n2">circle 1 Multicultural & Multilanguage Team</p>
                </div>
            </div>
            <div class="circle2 fl hidd">
                <div class="circle-content2">
                    <h5>Banking / Insurance</h5>
                    <p class="d-n2">circle 2 circle 1 Multicultural & Multilanguage Team</p>
                </div>
            </div>
            <div class="circle2 fl hidd">
                <div class="circle-content2">
                    <h5>Education</h5>
                    <p class="d-n2">circle 3 circle 1 Multicultural & Multilanguage Team</p>
                </div>
            </div>
            <div class="circle2 fl hidd">
                <div class="circle-content2">
                    <h5>Fashion</h5>
                    <p class="d-n2">circle 4 circle 1 Multicultural & Multilanguage Team</p>
                </div>
            </div>
        </div>
        <img id="toggleImage" src="{{asset('website/assets/imgs/img31.png')}}" alt="Toggle Image">
    </div>


</div>
@endsection
@push('scripts')
<script>
    const imageContainer = document.getElementById('imageContainer');
    const toggleImage = document.getElementById('toggleImage');
    let isExpanded = false;

    toggleImage.addEventListener('click', function () {
        const allImages = imageContainer.querySelectorAll('.fl');

        if (isExpanded) {
            // Hide extra images (from index 3 onwards)
            for (let i = 6; i < allImages.length; i++) {
                allImages[i].classList.add('hidd');
            }
            toggleImage.src = "{{asset('website/assets/imgs/img31.png')}}"; // Image for "Show More"
        } else {
            // Show all images
            for (let i = 3; i < allImages.length; i++) {
                allImages[i].classList.remove('hidd');
            }
            toggleImage.src = "{{asset('website/assets/imgs/img32.png')}}"; // Image for "Show Less"
        }

        isExpanded = !isExpanded;
    });

</script>
@endpush