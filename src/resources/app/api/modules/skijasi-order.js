import resource from "../../../../../../core/src/resources/js/api/resource";
import QueryString from "../../../../../../core/src/resources/js/api/query-string";

let apiPrefix = process.env.MIX_API_ROUTE_PREFIX
  ? "/" + process.env.MIX_API_ROUTE_PREFIX + "/module/commerce"
  : "/skijasi-api/module/commerce";

export default {
  browse(data = {}) {
    let ep = apiPrefix + "/v1/order/public";
    let qs = QueryString(data);
    let url = ep + qs;
    return resource.get(url);
  },

  read(data) {
    let ep = apiPrefix + "/v1/order/public/read";
    let qs = QueryString(data);
    let url = ep + qs;
    return resource.get(url);
  },

  pay(data) {
    let ep = apiPrefix + "/v1/order/public/pay";
    return resource.post(ep, data);
  },




  stvoriuplatnicu(data = {}) {
    let ep = apiPrefix + "/v1/order/public/stvoriuplatnicu";
    return resource.post(ep, data);
  },

  // New method to get order status
  getOrderStatus(data = {}) {
    let ep = apiPrefix + "/v1/order/public/orderstatus";
    return resource.post(ep, data);
  }

};
