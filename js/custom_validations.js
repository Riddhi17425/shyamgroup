$.validator.addMethod("noSpamEmail", function (value, element) {
    const spamPatterns = [
        /^[a-zA-Z]{8,}[0-9]{6,}@/,
        /^[0-9]+@/,
        /(temp-mail|10minutemail|mailinator|guerrillamail|yopmail|throwawaymail|form-check.online|seismologiomail|ru|mailport.lat)/i,
        /^(test|demo|example|noreply|fake|admin|info|random|dummy)/i,
        /^(.)(\1){5,}@/
    ];

    for (let pattern of spamPatterns) {
        if (pattern.test(value)) {
            return false;
        }
    }
    return true;
}, "This email is not allowed");
    
// Custom method to block name 'RobertAppex'
$.validator.addMethod("blockName", function(value, element) {
    return this.optional(element) || value.toLowerCase() !== "robertappex";
}, "This name is not allowed.");

// Custom method to allow English (ASCII) characters only
$.validator.addMethod("englishOnly", function(value, element) {
    return this.optional(element) || /^[\x00-\x7F]*$/.test(value);
}, "Only English characters are allowed.");

// Custom method for valid phone number (basic example)
$.validator.addMethod("validPhone", function(value, element) {
    return this.optional(element) || /^[0-9]{7,15}$/.test(value);
}, "Please enter a valid phone number (7-15 digits).");

$.validator.addMethod("lettersonly", function (value, element) {
    return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
}, "Letters only please");