import $ from 'jquery';


class Availability
{
    // 1. Describe and create/initiate our object
    constructor()
    {
        this.submitId = $('#btnSubmitId');    
        this.templatePartId = $('#newContentId');    
        this.hideContentId = $('div .test');
        this.events();   
    }


        // 2. events
        events()
        {
            this.submitId.on("click", this.changeFunctionValues.bind(this)); 
            this.hideContentId.mouseover(this.hideFunction).bind(this);
            this.hideContentId.mouseout(this.showFunction).bind(this);                                         
        }
    
    
        // 3. methods (function, action...)    
        hidefunction()
        {
            console.log('in');
            this.templatePartId.html(`
            <div class="page-banner">
                <div class="page-banner__bg-image" style="background-image: url('${universityData.theme_urL}/images/library-hero.jpg');"></div>
                <div class="page-banner__content container t-center c-white"></div>
            </div>
            `);
        }
    
        showFunction()
        {
            console.log('out');
            this.templatePartId.remove();
        }


    // 3. methods (function, action...)    
    changeFunctionValues()
    {
        console.log(universityData.root_url);
        this.templatePartId.html(`
        <div class="page-banner test" id="testRemove">
            <div class="page-banner__bg-image" style="background-image: url('${universityData.theme_urL}/images/library-hero.jpg');"></div>
            <div class="page-banner__content container t-center c-white">
                <h1 class="headline headline--large">Welcome!</h1>
                <h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
                <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re interested in?</h3>
                <a href="${universityData.program_archive_link}" class="btn btn--large btn--blue">Find Your Major</a>
            </div>
        </div>
        `);

    }

    getAPIresults()
    {
        $.getJSON(universityData.root_url + '/wp-json/university/v1/search?term=' + this.searchField.val(), (results) => 
        {});
    }
}

export default Availability;