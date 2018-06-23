import React from "react";
import PortfolioItem from "./PortfolioItem";

class App extends React.Component {
  render() {
    return (
      <div className="portfolio-gallery">
        <div className="portfolio-gallery_container">
          <Header />
          <PortfolioItem />
          <PortfolioItem />
          <PortfolioItem />
          <PortfolioItem />
          <PortfolioItem />
          <PortfolioItem />
        </div>
      </div>
    );
  }
}

export default App;
