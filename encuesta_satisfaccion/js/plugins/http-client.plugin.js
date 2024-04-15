
export const httpClients = {

    post: async (url = '', data) => $.ajax({ url, data, type: 'POST'}),
    get: async (url = '') => { return $.ajax({ url: url, dataType: 'json', type: 'GET' }); }
}

