import resource from "../../../../../../core/src/resources/js/api/resource";
import QueryString from "../../../../../../core/src/resources/js/api/query-string";


let apiPrefix = process.env.MIX_API_ROUTE_PREFIX
  ? "/" + process.env.MIX_API_ROUTE_PREFIX + "/module/commerce"
  : "/skijasi-api/module/commerce";

export default {
  edit(data) {
    let ep = apiPrefix + "/v1/user/public/edit";
    return resource.put(ep, data);
  },

  changePassword(data) {
    let ep = apiPrefix + "/v1/user/public/change";
    return resource.post(ep, data);
  },

  totalUsers() {
    const url = apiPrefix + "/v1/user/public/count";
    return resource.get(url);
  },



  browsetbldep(data = {}) {
    const ep = apiPrefix + "/v1/user/public/browsezborovi";
    const qs = QueryString(data);
    const url = ep + qs;
    return resource.get(url);
  },

};
