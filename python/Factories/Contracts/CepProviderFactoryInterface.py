from abc import ABC, abstractmethod
from Contracts.CepProviderInterface import CepProviderInterface


class CepProviderFactoryInterface(ABC):
    @abstractmethod
    def make(self, provider_name: str) -> CepProviderInterface:
        pass
