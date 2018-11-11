
class Ajax {

    get(url, params) {

        return axios.get(url, {
            params: params
          })
          .then(function (response) {
            return response;
          })
          .catch(function (error) {
            console.log(error);
          })
          .then(function () {
            
          }); 
    }
}
export default Ajax;