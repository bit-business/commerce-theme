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

  read(data) {
    let ep = apiPrefix + "/v1/configurations/read";
    let qs = QueryString(data);
    let url = ep + qs;
    return resource.get(url);
  },

  edit(data) {
    return resource.put(apiPrefix + "/v1/configurations/edit", data);
  },

  editMultiple(data) {
    return resource.put(apiPrefix + "/v1/configurations/edit-multiple", data);
  },

  add(data) {
    return resource.post(apiPrefix + "/v1/configurations/add", data);
  },

  delete(data) {
    let paramData = {
      data: data,
    };
    return resource.delete(apiPrefix + "/v1/configurations/delete", paramData);
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
    let ep = `${apiPrefix}/v1/forms/${formId}/entries`;
    return resource.post(ep, data);
  },

  saveForm(data) {
    let ep = `${apiPrefix}/v1/forms`;
    return resource.post(ep, data);
  },


  browseForm() {
    let ep = apiPrefix + "/v1/forms";
    return resource.get(ep);
  },
  getForm(formId) {
    let ep = `${apiPrefix}/v1/forms/${formId}`;
    return resource.get(ep);
  },

  editForm(formId, data) {
    let ep = `${apiPrefix}/v1/forms/${formId}`;
    return resource.put(ep, data);
  },

  updateForm(formId, data) {
    let ep = `${apiPrefix}/v1/forms/${formId}`;
    return resource.put(ep, data);
  },

};
