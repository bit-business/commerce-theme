import resource from "../../../../../../core/src/resources/js/api/resource";
import QueryString from "../../../../../../core/src/resources/js/api/query-string";


const apiPrefix = process.env.MIX_API_ROUTE_PREFIX
  ? "/" + process.env.MIX_API_ROUTE_PREFIX
  : "/skijasi-api";

export default {
  view(file) {
    const data = {
      file,
    };
    const ep = apiPrefix + "/v1/file/view";
    const qs = QueryString(data);
    const url = ep + qs;
    return url;
  },

  upload(files) {
    return resource.post(apiPrefix + "/v1/file/upload", {
      files: files,
    });
  },

  download(file) {
    const data = {
      file,
    };
    const ep = apiPrefix + "/v1/file/download";
    const qs = QueryString(data);
    const url = ep + qs;
    return url;
  },

  browseUsingLfm(data = {}) {
    const ep = apiPrefix + "/v1/file/browse/lfm";
    const qs = QueryString(data);
    const url = ep + qs;
    return resource.get(url);
  },

  uploadUsingLfm(files) {
    return resource.post(apiPrefix + "/v1/file/upload/lfm", files);
  },

  deleteUsingLfm(data) {
    const ep = apiPrefix + "/v1/file/delete/lfm";
    const qs = QueryString(data);
    const url = ep + qs;
    return resource.get(url);
  },

  browseConfiguration(data = {}) {
    const ep = apiPrefix + "/v1/file/mimetypes";
    const qs = QueryString(data);
    const url = ep + qs;
    return resource.get(url);
  },



//galerija
  getImagesFromSlike() {
    const ep = apiPrefix + "/v1/file/get-images-from-slike";
    return resource.get(ep);
},

getFolderNames({ directory }) {
  const ep = apiPrefix + "/v1/file/getfolders";
  const qs = QueryString({ directory }); // sending the directory as a query parameter
  const url = ep + qs;
  return resource.get(url);
},


};
