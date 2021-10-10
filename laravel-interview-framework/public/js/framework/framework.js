'use strict';

// Set default
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Send an ajax request and do something with the response.
 * 
 * @param {String}        url      url to send request to
 * @param {Object|null}   data     optional data to send with the request
 * @param {Function|null} callback optional callback to run with the response
 * 
 * @return {void}
 */
function sendPost(url, data = null, callback = null) {
    let returnValue;

    if (!data) {
        data = {};
    }

    axios.post(url, data)
        .then(r => {
            if (callback) {
                callback(r.data);
            }
        })
        .catch(e => handleRequestException(e));
}

/**
 * Send an ajax request and do something with the response.
 * 
 * @param {String}        url      url to send request to
 * @param {Object|null}   data     optional data to send with the request
 * @param {Function|null} callback optional callback to run with the response
 * 
 * @return {void}
 */
function sendGet(url, data = null, callback = null) {
    let returnValue;

    if (!data) {
        data = {};
    }

    axios.get(url, { params: data })
        .then(r => {
            if (callback) {
                callback(r.data);
            }
        })
        .catch(e => handleRequestException(e));
}

/**
 * Handle a request exception.
 * 
 * @param {Object} e exception
 * 
 * @return {void}
 */
function handleRequestException(e) {
    let message = null;

    if (e.response) {
        // Server responded within non 2xx code, grab the message
        message = e.response.data.message;
    } else if (e.request) {
        // The request was made but no response was received
        message = e.request;
    } else {
        message = e.message;
    }

    alert(message);
    console.error(message);
}

/**
 * Handle form submition.
 *
 * @param {Object} e exception
 *
 * @return {void}
 */
function formSubmit(e) {
    e.preventDefault();

    const data = new FormData(e.target);

    // Ensure every input has a value
    for (var [key, value] of data.entries()) {
        if (!value) {
            document.querySelector('#example-form input[name="' + key + '"]').focus();
            return;
        }
    }

    sendPost('example/create', data, view => document.querySelector('#example-view').innerHTML = view);
}
