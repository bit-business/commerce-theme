import resource from "../../../../../../core/src/resources/js/api/resource";
import QueryString from "../../../../../../core/src/resources/js/api/query-string";

let apiPrefix = process.env.MIX_API_ROUTE_PREFIX
  ? "/" + process.env.MIX_API_ROUTE_PREFIX + "/module/commerce"
  : "/skijasi-api/module/commerce";

export default {
  browse(data = {}) {
    let ep = apiPrefix + "/v1/configurations";
    let qs = QueryString(data);
    let url = ep + qs;
    return resource.get(url);
  },

};
