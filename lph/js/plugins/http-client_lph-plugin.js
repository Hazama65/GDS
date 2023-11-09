export const httpClients = {

    post : async(url='',data) => $.ajax({url,data,type: 'POST'})
}