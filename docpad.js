module.exports = {

  // -- Basic information ----------------------------------------------------
  templateData: {

  	// Production
    site: {
    	name: "BrazilJS",
      description: "Uma fundação sem fins lucrativos com a missão de mover e unir a comunidade de JavaScript no Brasil.",
    	url: "http://braziljs.github.io/foundation"
    }

  },

  // -- Collections ------------------------------------------------------------
  collections: {

    // Get all projects sorted by alphabetical order
    projects: function() {
      var documents = this.getCollection("documents");
      var sortByAscendingTitle = [{ title: 1 }];

      return documents.findAll({
        url: {
          $startsWith: '/projetos'
        }
      }, sortByAscendingTitle);
    },

    // Get all projects sorted by date order
    blogposts: function() {
      var documents = this.getCollection("documents");
      var sortByAscendingDate = [{ date: -1 }];

      return documents.findAll({
        url: {
          $startsWith: '/blog'
        }
      }, sortByAscendingDate);
    }

  },

  // -- Environments -----------------------------------------------------------
  environments: {

    // Development
    development: {
      templateData: {
        site: {
          url: "http://localhost:9778"
        }
      }
    }

  },

  // -- Plugins ----------------------------------------------------------------
  plugins: {
    moment: {
      formats: [
        { raw: 'date', format: 'D', formatted: 'day' },
        { raw: 'date', format: 'MMM', formatted: 'month' }
      ]
    }
  }

};