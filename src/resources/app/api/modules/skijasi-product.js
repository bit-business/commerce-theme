import resource from "../../../../../../core/src/resources/js/api/resource";
import QueryString from "../../../../../../core/src/resources/js/api/query-string";

let apiPrefix = process.env.MIX_API_ROUTE_PREFIX
  ? "/" + process.env.MIX_API_ROUTE_PREFIX + "/module/commerce"
  : "/skijasi-api/module/commerce";

export default {
  browse(data = {}) {
    let ep = apiPrefix + "/v1/product/public";
    let qs = QueryString(data);
    let url = ep + qs;
    return resource.get(url);
  },

  browseByCategorySlug(data = {}) {
    let ep = apiPrefix + "/v1/product/public/browse-category-slug";
    let qs = QueryString(data);
    let url = ep + qs;
    return resource.get(url);
  },

  browseSimilar(data = {}) {
    let ep = apiPrefix + "/v1/product/public/browse-similar";
    let qs = QueryString(data);
    let url = ep + qs;
    return resource.get(url);
  },

  browseBestSellingProduct(data = {}) {
    let ep = apiPrefix + "/v1/product/public/best-selling";
    let qs = QueryString(data);
    let url = ep + qs;
    return resource.get(url);
  },

  read(data = {}) {
    let ep = apiPrefix + "/v1/product/public/read";
    let qs = QueryString(data);
    let url = ep + qs;
    return resource.get(url);
  },

  readByCart(data) {
    let ep = apiPrefix + "/v1/product/public/read-by-cart";
    let qs = QueryString(data);
    let url = ep + qs;
    return resource.get(url);
  },

  search(data = {}) {
    let ep = apiPrefix + "/v1/product/public/search";
    let qs = QueryString(data);
    let url = ep + qs;
    return resource.get(url);
  },
};
