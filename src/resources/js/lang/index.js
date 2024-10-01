import hr from './modules/hr.json';
import en from './modules/en.json';
import it from './modules/it.json';

const languages = [
  { label: "Hrvatski", key: "hr" },
  { label: "English", key: "en" },
  { label: "Italiano", key: "it" }
];

const i18n = {
  hr,
  en,
  it
};

// Dynamic import of additional languages
try {
  const modules = require.context("./modules", false, /\.json$/);
  modules.keys().forEach((fileName) => {
    const languageKey = fileName.replace("./", "").replace(".json", "");
    if (!i18n[languageKey]) {
      const module = modules(fileName);
      i18n[languageKey] = module; // Remove .default here
    }
  });
} catch (error) {
  console.warn("Failed to load additional languages", error);
}

export default {
  languages,
  i18n
};