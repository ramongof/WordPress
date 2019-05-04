<?php

/*** DICTIONARY
 * WP_REST_SERVER::READABLE == GET method
 * sanitize_text_field() AVOID SQL INJECTION
 * 
*/

// add_action('rest_api_init', 'universityRegisterEvent');

function universityRegisterEvent()
{
    register_rest_route('university/v1', 'event', array(
        'methods' => WP_REST_SERVER::READABLE,
        'callback' => 'changeParameterResults'
    ));
}

function changeParameterResults()
{
    $mainQuery = new WP_Query(array(
        'post_type' => 'event'
    ));

    $results = array(
        'events' => array()
    );

    while($mainQuery->have_posts())
    {
        $mainQuery->the_post();
        
        if(get_post_type() == 'post' OR get_post_type() == 'page')
        {
            array_push($results['event'], array(
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
                'postType' => get_post_type(),
                'authorName' => get_the_author(),
                'templatePart' => get_template_part()
            ));
        }

        if(get_post_type() == 'event')
        {            
            $description = null;
            $newTemplate = 'template-parts/content-event';

            if(has_excerpt())
            {
                $description = get_the_excerpt();
            }
            else
            {
                $description = wp_trim_words(get_the_content(), 18);
            }

            array_push($results['events'], array(
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
                'description' => $description,
                'templatePart' => $newTemplate
            ));
        }
    }
    return $results;
}