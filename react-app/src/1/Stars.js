import React from "react";

const Stars = props => {
    let stars = [];
    let star;

    for (let i = 0; i < 5; i++) {
        if (props.rating >= i + 0.8) {
            star = <i className="fas fa-star" key={i}></i>;
        } else if ($rating >= i + 0.3) {
            star = <i class="fas fa-star-half-alt" key={i}></i>;
        } else {
            star = <i class="far fa-star" key={i}></i>;
        }

        stars.push(star);
    }

    return (
        <div className="star-container" title={props.$rating}>
            {stars}
        </div>
    );
}

export default Stars;