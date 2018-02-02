// Main configuration file

var config = {
    "panels": // Panel properties & animation settings
    {
        "hover": true, // Turn hover animation on/off
        "hover_over_elements": false, // When false, panels won't flash when your mouse cursor is over a text or another element
        "random": true, // Turn random animation on/off
        "random_phones": false, // Toggles random animation on smartphones and small tablets (less than 768px wide)        
        "random_tails": true, // If true, random animation will flash several panels instead of one
        "random_min_interval": 250, // Min. time between random animations in milliseconds
        "random_max_interval": 1000, /* Max. time between random animations in milliseconds 
                                                (interval = random value between min and max) */
        "animation_duration": 250,  // Flashing animation duration in milliseconds        
        "width": 100, // Flashing panel width
        "height": 100 // Flashing panel height
    },
    "countdown": // Counter date
    {
        "year": 2018,
        "month": 2,
        "day": 28,
        "hours": 12,
        "minutes": 0,
        "seconds": 0
    },
    "subscription": // Subscription form messages
    {
        "success": "Thank you! We will contact with you soon.", // On successful subscription 
        "default_error": "Error! Contact with administrator", // On some unknown error 
        "empty_email": "enter your email", // When email field is empty 
        "invalid_email": "email is invalid" // When email is invalid (for example, there is no @ character in it) 
    }
};