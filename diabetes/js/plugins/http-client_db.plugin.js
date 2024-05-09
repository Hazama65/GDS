export const httpClients = {

    post: async (url = '', data) => $.ajax({ url, data, type: 'POST' }),
    get: async (url = '', params = {}) => { return $.ajax({ url: url, data: params, type: 'GET' }); }
}