import FilterBar from './1/FilterBar'
import FilterModal from './1/FilterModal';
import PropertyCard from './1/PropertyCard';

const App = () => {
    return (
        <>
            <div className='page-container'>
                <FilterBar />
                <PropertyCard />
            </div>
            <FilterModal />
        </>
    );
}

export default App;