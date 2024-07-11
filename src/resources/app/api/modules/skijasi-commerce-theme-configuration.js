import resource from "../../../../../../core/src/resources/js/api/resource";
import QueryString from "../../../../../../core/src/resources/js/api/query-string";

let apiPrefix = process.env.MIX_API_ROUTE_PREFIX
  ? "/" + process.env.MIX_API_ROUTE_PREFIX + "/theme/commerce-theme"
  : "/skijasi-api/theme/commerce-theme";

export default {
  browse(data = {}) {
    let ep = apiPrefix + "/v1/configurations";
    let qs = QueryString(data);
    let url = ep + qs;
    return resource.get(url);
  },


  getFormFields(formId) {
    let ep = `${apiPrefix}/v1/forms/${formId}/fields`;
    return resource.get(ep);
  },

  getUserData(userId) {
    let ep = `${apiPrefix}/v1/users/${userId}`;
    return resource.get(ep);
  },

  saveFormEntry(formId, data) {
    let ep = `${apiPrefix}/v1/configurations/forms/${formId}/entries`;
    return resource.post(ep, data);
  },

  saveForm(data) {
    let ep = `${apiPrefix}/v1/configurations/forms`;
    return resource.post(ep, data);
  },

  
};
